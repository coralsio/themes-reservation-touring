<div class="box_style_{{$boxStyle ?? 4}}">
    <i class="icon_set_1_icon-57"></i>
    @lang('reservation-touring::labels.touring.need_help')
    <a href="tel://{{ \Settings::get('contact_mobile','+970599593301') }}"
       class="phone">{{ \Settings::get('contact_mobile','+970599593301') }}</a>
    <small>{!! Settings::get('operational_time') !!}</small>
</div>