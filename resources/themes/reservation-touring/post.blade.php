@extends('layouts.master')

@section('css')
    {!! Theme::css('css/blog.css') !!}
@endsection


@section('content')


    <section class="parallax-window" data-parallax="scroll" data-image-src="{{$item->post->featured_image}}" data-natural-width="1400"
             data-natural-height="470">
        <div class="parallax-content-1">
            <div class="animated fadeInDown">
                <h1>{{$item->post->title}}</h1>
            </div>
        </div>
    </section>
    <!-- End section -->

    <main>
        <div id="position">
            <div class="container">
                <ul>
                    <li><a href="#"> @lang('reservation-touring::labels.touring.home')</a>
                    </li>
                    <li><a href="{{url('blog')}}"> @lang('reservation-touring::labels.touring.blog')</a>
                    </li>
                    <li>{{$item->post->title}}</li>
                </ul>
            </div>
        </div>
        <!-- End position -->

        <div class="container margin_60">
            <div class="row">
            @include('partials.blog_sidebar')
            <!-- End aside -->

                <div class="col-lg-9">
                    <div class="box_style_1">
                        <div class="post nopadding">
                            <img src="{{$item->post->featured_image}}" alt="Image" class="img-fluid">
                            <div class="post_info clearfix">
                                <div class="post-left">
                                    <ul>
                                        <li><i class="icon-calendar-empty"></i>On
                                            <span>{{format_date($item->post->published_at)}}</span>
                                        </li>


                                        @if(count($postCategories = $item->post->activeCategories ))
                                            <li>
                                                <i class="icon-inbox-alt"></i>In
                                                @foreach($postCategories as $postCategory)
                                                    <a href="{{url('category/'.$postCategory->slug)}}">{{$postCategory->name}}</a>
                                                    @if(!$loop->last)
                                                        |
                                                    @endif
                                                @endforeach
                                            </li>
                                        @endif

                                        @if(count($activeTags = $item->post->activeTags))
                                            <li><i class="icon-tags"></i> @lang('reservation-touring::labels.post.tags')
                                                @foreach($activeTags as $tag)
                                                    <a href="{{ url('tag/'.$tag->slug) }}">
                                                        {{$tag->name}}
                                                    </a>
                                                    @if(!$loop->last)
                                                        |
                                                    @endif
                                                @endforeach
                                            </li>
                                        @endif

                                    </ul>
                                </div>
                            </div>
                            <h2>{{ $item->post->title }}</h2>
                            <p>
                                {!! $item->post->rendered !!}
                            </p>
                        </div>
                        <!-- end post -->
                    </div>

                </div>
                <!-- End col-md-9-->

            </div>
            <!-- End row-->
        </div>
        <!-- End container -->
    </main>
@stop