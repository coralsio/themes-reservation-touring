@push('partial_css')
    <style>
        #card-errors {
            margin-top: 15px !important;
        }
    </style>
@endpush

<div class="row">
    <div class="col-md-12">

        @if($gateway)
            @include($gateway->getPaymentViewName('ecommerce'),['action'=>$urlPrefix.'checkout/step/select-payment'])
        @else
            @php \Actions::do_action('pre_order_checkout_form',$gateway) @endphp
            <div class="">
                {!! CoralsForm::openForm(null,['url' => url($urlPrefix.'checkout/step/select-payment'),'method'=>'POST','files'=>true,'class'=>'ajax-form','id'=>'PaymentForm']) !!}
                {{--                <input type="hidden" name="order" value="{{ $order->hashed_id  }}"/>--}}
                <br>

                <div class="payment-options">
                    <ul>
                        @foreach($available_gateways as $label => $available_gateway)
                            <li>
                                <div class="radio-option">
                                    <input type="radio" name="select_gateway" id="payment-{{$label}}"
                                           value="{{$available_gateway}}">
                                    <label for="payment-{{$label}}">{{$label}}
                                    </label>
                                </div>
                            </li>
                        @endforeach

                    </ul>
                </div>
                <div class="form-group">
                    <span data-name="checkoutToken"></span>
                </div>
            </div>
            {!! CoralsForm::closeForm() !!}

            <div id="gatewayPayment">

            </div>
        @endif
    </div>
</div>

@push('partial_js')

    <script type="application/javascript">

        $(document).ready(function () {
            var reservationId = '{{ $reservation->hashed_id }}';

            $('input[name="select_gateway"]').on('ifChanged', function () {
                if ($(this).prop('checked')) {
                    var gatewayName = $(this).val();
                    var url = '{{ url('reservation/checkout/gateway-payment') }}' + "/" + gatewayName + "/" + reservationId;
                    $("#gatewayPayment").empty();
                    $("#gatewayPayment").load(url);
                }
            });
        });
    </script>

@endpush
