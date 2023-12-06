<?php


namespace Corals\Modules\Reservation\Http\Controllers;

use Carbon\Carbon;
use Corals\Modules\Entity\Models\Entry;
use Corals\Modules\Reservation\Classes\ReservationPayment;
use Corals\Modules\Reservation\Facades\ServiceSchedule;
use Corals\Modules\Reservation\Models\Reservation;
use Corals\Modules\Reservation\Models\Service;
use Corals\Modules\Reservation\Services\ReservationService;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;
use Settings;

class ToursReservationsController extends ToursBaseController
{
    /**
     * @param Request $request
     * @param Entry $entry
     * @param ReservationService $reservationService
     * @return Application|JsonResponse|mixed
     */
    public function createReservation(Request $request, Entry $entry, ReservationService $reservationService)
    {

        try {
            $user = optional(user());

            $service = Service::find($entry->values['service']);

            $startsAt = Carbon::parse($request->get('starts_at'));

            $startDateSchedule = $service->schedules()->where('day_of_the_week', $startsAt->shortEnglishDayOfWeek)->first();


            if (!$startDateSchedule || (!$startDateSchedule->start_time && !$startDateSchedule->end_time)) {
                abort(404, trans('Reservation::exceptions.reservation.reservation_not_available_with_this_selected_date'));
            }

            [$hours, $minutes, $second] = explode(':', $startDateSchedule->start_time);
            $startsAt = $startsAt->setTime($hours, $minutes, $second);

            [$hours, $minutes, $second] = explode(':', $startDateSchedule->end_time);
            $endsAt = $startsAt->copy()->setTime($hours, $minutes, $second);

            $quantity = $request->get('quantity', 1);

            $request->merge([
                'line_items' => [
                    [
                        'code' => $service->mainLineItem()->first()->code,
                        'quantity' => $quantity
                    ]
                ],
                'service_id' => $service->id,
                'starts_at' => $startsAt,
                'ends_at' => $endsAt,
                'max_reservations_quantity' => $entry->values['max_passengers'] ?? 1,
                'requested_quantity' => $quantity
            ]);

            $reservation = $reservationService->store($request, Reservation::class, [
                'status' => 'draft',
                'code' => Reservation::getCode('RES'),
                'owner_id' => $user->id,
                'owner_type' => user() ? getMorphAlias(user()) : null,
                'quantity' => $quantity
            ]);

            return redirectTo(url('checkout', [$reservation->hashed_id, $entry->hashed_id]));

        } catch (Exception $exception) {
            log_exception($exception);

            $message = [
                'level' => 'error',
                'message' => $exception->getMessage()
            ];

            $code = 400;
        }

        return response()->json($message, $code ?? 200);

    }

    /**
     * @param Request $request
     * @param Reservation $reservation
     * @param Entry $entry
     * @param ReservationPayment $reservationPayment
     * @return \Illuminate\Contracts\Foundation\Application|Factory|View
     */
    public function checkoutPage(Request $request, Reservation $reservation, Entry $entry, ReservationPayment $reservationPayment)
    {
        $invoice = $reservation->invoice;

        $gateway = null;
        $available_gateways = $reservationPayment->getReservationAvailableGateway();

        $urlPrefix = '';

        $this->reservationSEO(trans('reservation-touring::labels.template.cart.checkout') . " [ " . $entry->presentStripTags('title') . "]");

        return view("views.tours.checkout")
            ->with(
                compact('reservation', 'invoice', 'entry', 'gateway', 'available_gateways', 'urlPrefix')
            );
    }

    /**
     * @param Request $request
     * @param Reservation $reservation
     * @param Entry $entry
     * @return Application|JsonResponse|mixed
     * @throws ValidationException
     */
    public function checkout(Request $request, Reservation $reservation, Entry $entry)
    {

        abort_if($reservation->status != 'draft', 404);

        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required | email',
            'phone' => 'required',
            'terms' => 'required',
            'gateway' => 'required',
            'checkoutToken' => 'required'
        ]);

        try {
            $contactDetails = [
                'first_name' => $request->get('first_name'),
                'last_name' => $request->get('last_name'),
                'email' => $request->get('email'),
                'phone' => $request->get('phone')
            ];

            $invoice = $reservation->invoice;

            $gateway = $request->get('gateway');

            $reservationPayment = new ReservationPayment($gateway);

            if ($reservationPayment->doPayment($request, $reservation)) {
                $reservationStatus = Settings::get('reservations_need_approval', true) ? 'pending' : 'confirmed';
                $reservation->update(['status' => $reservationStatus]);
                $invoice->update(['status' => 'paid']);
            }

            ServiceSchedule::clearSelectedReservationFromSession($reservation->id);


            $reservation->setProperty('contact_details', $contactDetails);
            $invoice->setProperty('billing_address', $contactDetails);


            return redirectTo(url("checkout/success/$reservation->hashed_id/$entry->hashed_id"));

        } catch (Exception $exception) {
            $message = [
                'level' => 'error',
                'message' => $exception->getMessage()
            ];

            $code = 400;
        }

        return response()->json($message, $code ?? 200);
    }

    /**
     * @param Request $request
     * @param Reservation $reservation
     * @param Entry $entry
     * @return \Illuminate\Contracts\Foundation\Application|Factory|View
     */
    public function successCheckout(Request $request, Reservation $reservation, Entry $entry)
    {
        abort_if(in_array($reservation->status, ['draft']), 404);

        $this->reservationSEO(trans('reservation-touring::labels.touring.thank_you') . " [" . $entry->presentStripTags('title') . " ]");

        $publicInvoiceURL = URL::signedRoute('publicInvoice', [
            'invoice' => $reservation->invoice->hashed_id
        ]);

        return view('views.tours.success')
            ->with(compact('reservation', 'entry', 'publicInvoiceURL'));
    }

    /**
     * @param Request $request
     * @param Reservation $reservation
     * @param ReservationService $reservationService
     * @return JsonResponse
     */
    public function cancelReservation(Request $request, Reservation $reservation, ReservationService $reservationService)
    {

        try {

            $reservationService->cancel($reservation);

            $message = [
                'message' => 'Reservation Successfully Cancelled',
                'level' => 'success'
            ];

        } catch (\Exception $exception) {

            $message = [
                'level' => 'error',
                'message' => $exception->getMessage()
            ];

            $code = 400;
        }

        return response()->json($message, $code ?? 200);

    }

    /**
     * @param Request $request
     * @param Entry $entry
     * @return JsonResponse
     */
    public function getBookingComponentData(Request $request, Entry $entry)
    {
        abort_if(!$request->ajax(), 404);

        try {


            $service = Service::find($entry->values['service']);


            $translation = [
                'booking' => trans('reservation-touring::labels.touring.booking'),
                'select_date' => trans('reservation-touring::labels.touring.select_date'),
                'quantity' => trans('reservation-touring::labels.touring.quantity'),
                'total_amount' => trans('reservation-touring::labels.touring.total_amount'),
                'total_cost' => trans('reservation-touring::labels.touring.total_cost'),
                'book_now' => trans('reservation-touring::labels.touring.book_now'),
            ];

            $message = [
                'translations' => $translation,
                'disable_date' => ServiceSchedule::getServiceOffDays($service),
                'user_currency' => \Currency::getUserCurrency(),
                'pure_cost' => \Facades\Corals\Modules\Reservation\Classes\TouringReservations::getTourMainPrice($entry, false)
            ];

        } catch (\Exception $e) {
            $message = [
                'level' => 'error',
                'message' => $e->getMessage()
            ];

            $code = 400;
        }

        return response()->json($message, $code ?? 200);

    }

}