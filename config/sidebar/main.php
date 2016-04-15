<?php

return [
    'title'       => 'CMS',
    'name'        => 'cms',
    'icon'        => 'fa fa-fw fa-files-o',
    'roles'       => [],
    'permissions' => [],
    'children'    => [
        [
            'title'       => 'Statistics',
            'name'        => 'cms-dashboard',
            'route'       => 'pages::foundation.dashboard',
            'icon'        => 'fa fa-fw fa-bar-chart',
            'roles'       => [],
            'permissions' => ['pages.dashboard.stats'],
        ],[
            'title'       => 'Pages',
            'name'        => 'cms-pages',
            'route'       => 'pages::foundation.pages.index',
            'icon'        => 'fa fa-fw fa-file-text-o',
            'roles'       => [],
            'permissions' => ['pages.posts.list'],
        ]
    ],
];
