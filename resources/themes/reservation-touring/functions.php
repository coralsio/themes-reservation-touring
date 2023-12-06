<?php


\Filters::add_filter('dashboard_url', function ($dashboard_url) {

    if (!isSuperUser()) {
        return 'my-dashboard';

    }
    return $dashboard_url;

}, 12);

