<aside class="col-lg-3 add_bottom_30">

    @include('partials.search')

    <hr>

    <div class="widget" id="cat_blog">
        <h4> @lang('reservation-touring::labels.partial.categories')</h4>
        <ul>
            @foreach(\CMS::getCategoriesList(true,null,null,'post') as $category)
                <li>
                    <a href="{{url('category/'.$category->slug)}}">{{$category->name}}</a>
                </li>
            @endforeach
        </ul>
    </div>
    <!-- End widget -->

    <hr>

    <div class="widget">
        <h4> @lang('reservation-touring::labels.template.home.recent_posts')</h4>
        <ul class="recent_post">
            @foreach(\CMS::getLatestPosts(5) as $post)
                <li>
                    <i class="icon-calendar-empty"></i> {{ format_date($post->published_at) }}
                    <div><a href="{{ url($post->slug) }}">{{$post->title}}</a>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>


    @if(count($tags = \CMS::getTagsList(true)))
        <div class="widget tags">
            <h4>Tags</h4>
            @foreach($tags as $tag)
                <a href="{{url('tag/'.$tag->slug)}}">{{$tag->name}}</a>
            @endforeach
        </div>
    @endif

</aside>