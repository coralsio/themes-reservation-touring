<?php

Route::get('tours/get-booking-component-data/{entry}', 'ToursReservationsController@getBookingComponentData');
Route::get('tours', 'ToursController@index');
Route::get('tours/{slug}', 'ToursController@singleTour');

Route::group(['prefix' => 'checkout'], function () {
    Route::get('success/{reservation}/{entry}', 'ToursReservationsController@successCheckout');
    Route::post('{entry}/create-reservation', 'ToursReservationsController@createReservation');

    Route::get('{reservation}/{entry}', 'ToursReservationsController@checkoutPage');
    Route::post('{reservation}/{entry}', 'ToursReservationsController@checkout');
});

Route::post('reservations/cancel/{reservation}', 'ToursReservationsController@cancelReservation');

Route::get('my-dashboard', 'ToursController@dashboard')->middleware('auth');

