<div class="box_style_4">
    <i class="icon_set_1_icon-90"></i>
    @lang('reservation-touring::labels.touring.book_by_phone')
    <a href="tel://{{ \Settings::get('contact_mobile','+970599593301') }}"
       class="phone">{{ \Settings::get('contact_mobile','+970599593301') }}</a>
    <small>{!! Settings::get('operational_time') !!}</small>
</div>