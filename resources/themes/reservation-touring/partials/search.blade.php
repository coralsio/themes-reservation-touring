

<div class="widget">
    <form class="search-form" action="{{ url('blog') }}" method="GET">
        <div class="input-group">
            <input type="text" name="query" class="form-control" placeholder=" @lang('reservation-touring::labels.touring.search')">
            <span class="input-group-btn">
						<button class="btn btn-default" type="submit" style="margin-left:0;"><i class="icon-search"></i></button>
						</span>
        </div>
    </form>
</div>