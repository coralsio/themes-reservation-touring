<div class="{{$tour->inWishlist() ? 'wishlist_close':'wishlist_close wishlist'}}">

    <a href="{{url("entity/entry/wishlist/$tour->hashed_id")}}"
       data-action="post"
       data-page_action="toggleWishListTour"
       data-wishlist_tour_hashed_id="{{$tour->hashed_id}}"
       data-style="zoom-in"
       data-add_text="@lang('reservation-touring::labels.touring.add_to_wishlist')"
       data-remove_text="@lang('reservation-touring::labels.touring.remove_from_wishlist')"
       class="tooltip_flip tooltip-effect-1">
        {{$tour->inWishlist() ? '-':'+'}}

        <span class="tooltip-content-flip">

            <span class="tooltip-back">
                {{$tour->inWishlist() ?trans('reservation-touring::labels.touring.remove_from_wishlist'):trans('reservation-touring::labels.touring.add_to_wishlist')}}
            </span>

        </span>
    </a>

</div>