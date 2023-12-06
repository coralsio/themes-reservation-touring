@extends('layouts.master')

@section('css')
    {!! Theme::css('css/blog.css') !!}
@endsection


@section('content')

    <section class="parallax-window" data-parallax="scroll"
             data-image-src="{{ isset($featured_image) ? $featured_image: ''}}"
             data-natural-width="1400"
             data-natural-height="470">
        <div class="parallax-content-1">
            <div class="animated fadeInDown">
                <h1>
                    {{$blog->title}}
                </h1>
            </div>
        </div>
    </section>
    <!-- End section -->

    <main>
        <div id="position">
            <div class="container">
                <ul>
                    <li><a href="{{url('/')}}">@lang('reservation-touring::labels.touring.home')</a>
                    </li>

                    <li> @lang('reservation-touring::labels.touring.blog')</li>
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
                        @forelse($posts as $post)
                            <div class="post">
                                <a href="{{ url($post->slug) }}" title="blog_post.html"><img
                                            src="{{ $post->featured_image }}" alt="Image"
                                            class="img-fluid">
                                </a>
                                <div class="post_info clearfix">
                                    <div class="post-left">
                                        <ul>
                                            <li><i class="icon-calendar-empty"></i> On
                                                <span>{{format_date($post->published_at)}}</span>
                                            </li>

                                            @if(count($postCategories = $post->activeCategories ))
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

                                            @if(count($activePostTags = $post->activeTags))
                                                <li><i class="icon-tags"></i>Tags
                                                    @foreach($activePostTags as $tag)
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
                                <h2>{{ $post->title }}</h2>
                                <p>
                                    {{ \Str::limit(strip_tags($post->rendered ),250) }}
                                </p>

                                <a href="{{url($post->slug)}}" class="btn_1"
                                   title="{{$post->title}}"> @lang('reservation-touring::labels.blog.read_more')</a>
                            </div>
                            @if(!$loop->last)
                                <hr>
                            @endif
                        @empty
                            @lang('reservation-touring::labels.blog.no_posts_found')
                        @endforelse

                    </div>
                    <!-- end box style -->
                    <hr>

                {{ $posts->links('partials.paginator') }}

                <!-- end pagination-->

                </div>
                <!-- End col-md-9-->
            </div>
            <!-- End row-->
        </div>
        <!-- End container -->
    </main>

@stop