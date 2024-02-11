<?php

return [
    /*
     |--------------------------------------------------------------------------
     | Dashboard Route
     |--------------------------------------------------------------------------
     |
     | Items in this array will be used to generate the dashboard sidebar
     | - name: The label that will be displayed in the sidebar
     | - route: Could be a route name or a URL
     | - active_route: The route name or URL that will be used to determine if the item is active
     | - icon: The icon that will be displayed in the sidebar, Heroicons.
     */
    'navigation' => [
        [
            'name' => 'Dashboard',
            'route' => 'dashboard',
            'active_route' => 'dashboard',
            'icon' => 'home',
        ],
    ],
];
