@extends('layouts.master')

@section('content')

     <section class="parallax-window" data-parallax="scroll" data-image-src="{{$faq->featured_image}}"
             data-natural-width="1400"
             data-natural-height="470">
        <div class="parallax-content-1">
            <div class="animated fadeInDown">
                <h1>{{$faq->title}}</h1>
            </div>
        </div>
    </section>
    <!-- End section -->

    <main>

        <!-- Position -->

        <div class="container margin_60">
            <div class="row">
                <div class="container mb-3">
                    <div class="row">
                        <div class="col-md-12">
                            {!! $faq->content !!}
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                @if($categories=\CMS::getCategoriesList(true,null,null,'faq'))
                    <aside class="col-lg-3" id="sidebar">
                        <div class="theiaStickySidebar">
                            <div class="box_style_cat" id="faq_box">
                                <ul id="cat_nav">
                                    @foreach($categories as $category)
                                        <li><a href="#{{$category->slug}}" class="active"><i
                                                        class="icon_set_1_icon-95"></i>{{$category->name}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <!--End sticky -->
                    </aside>
            @endif
            <!--End aside -->
                <div class="col-lg-9" id="faq">

                    @foreach($categories as $category)
                        <h3 class="nomargin_top">{{$category->name}}</h3>
                        <div id="{{$category->slug}}" class="accordion_styled">

                            @foreach($category->faqs as $faq)
                                <div class="card">
                                    <div class="card-header">
                                        <h4>
                                            <a class="accordion-toggle" data-toggle="collapse"
                                               data-parent="#{{$category->slug}}"
                                               href="#collapseOne_payment">{{$faq->title}}<i
                                                        class="indicator icon-minus float-right"></i></a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne_payment" class="collapse show"
                                         data-parent="#{{$category->slug}}">
                                        <div class="card-body">
                                            {!! $faq->rendered !!}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                @endforeach

                <!--End privacy -->
                </div>
                <!-- End col lg-9 -->
            </div>
            <!-- End row -->
        </div>
        <!-- End container -->
    </main>
@endsection

@section('js')
    <script>
        $('#faq_box a[href^="#"]').click(function () {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
                || location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top - 115
                    }, 800);
                    return false;
                }
            }
        });
    </script>
@endsection