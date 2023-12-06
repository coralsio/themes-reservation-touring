{!! Theme::js('js/jquery-3.5.1.min.js') !!}

@if(\Language::isRTL())
    {!! Theme::js('js/common_scripts_min_rtl.js') !!}
    {!! Theme::js('js/functions_rtl.js') !!}

    <script>
        $('input.date-pick').datepicker({
            rtl: true
        });
    </script>
@else
    {!! Theme::js('js/common_scripts_min.js') !!}
    {!! Theme::js('js/functions.js') !!}
@endif

{!! Theme::js('js/cat_nav_mobile.js') !!}

<script>
    $('#cat_nav').mobileMenu();
</script>



<script>
    $('input.date-pick').datepicker('setDate', 'today');
    $('input.time-pick').timepicker({
        minuteStep: 15,
        showInpunts: false
    })
</script>

{!! Theme::js('js/jquery.ddslick.js') !!}

<script>
    $("select.ddslick").each(function () {
        $(this).ddslick({
            showSelectedHTML: true
        });
    });
</script>

<!-- Check box and radio style iCheck -->
<script>
    $('input').iCheck({
        checkboxClass: 'icheckbox_square-grey',
        radioClass: 'iradio_square-grey'
    });
</script>


@yield('js')
{!! Theme::js('assets/corals/plugins/lodash/lodash.js') !!}
{!! Theme::js('plugins/select2/dist/js/select2.full.min.js') !!}

{!! Theme::js('plugins/toastr/toastr.min.js') !!}
{!! Theme::js('plugins/Ladda/spin.min.js') !!}
{!! Theme::js('plugins/Ladda/ladda.min.js') !!}
{!! Theme::js('plugins/sweetalert2/dist/sweetalert2.all.min.js') !!}

{!! Theme::js('js/touring_functions.js') !!}

{!! Theme::js('js/main.js') !!}


{!! \Html::script('assets/corals/js/corals_functions.js') !!}
{!! \Html::script('assets/corals/js/corals_main.js') !!}
{!! Assets::js() !!}
@include('Corals::corals_main')


@php  \Actions::do_action('footer_js') @endphp

<script type="text/javascript">
    window.base_url = '{!! url('/') !!}';
    {!! \Settings::get('custom_js', '') !!}

</script>

