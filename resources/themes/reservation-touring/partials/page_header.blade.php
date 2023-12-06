<section class="parallax-window" data-parallax="scroll"
         data-image-src=" {{$featured_image }}"
         data-natural-width="1400"
         data-natural-height="470">
    <div class="parallax-content-1">
        <div class="animated fadeInDown">
            <h1>{!! isset($item)?optional($item)->title:'' !!}</h1>
        </div>
    </div>
</section>