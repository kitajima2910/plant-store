<?php

return [
    [
        'name' => 'Bảng Điều Khiển',
        'icon' => 'fa fa-dashboard',
        'route' => 'admin.dashboard',
        'active' => 'dashboard'
    ],
    [
        'name' => 'Danh mục sản phẩm',
        'icon' => 'fa fa-pencil-square',
        'active' => 'categories',
        'items' => [
            [
                'name' => 'Danh sách',
                'route' => 'categories.index',
                'active' => 'categories'
            ],
            [
                'name' => 'Thêm danh mục',
                'route' => 'categories.create',
                'active' => 'categories/create'
            ],
        ]
    ],
    [
        'name' => 'Menu Web',
        'icon' => 'fa fa-book',
        'active' => 'menus',
        'items' => [
            [
                'name' => 'Danh sách',
                'route' => 'menus.index',
                'active' => 'menus'
            ],
            [
                'name' => 'Thêm menu',
                'route' => 'menus.create',
                'active' => 'menus/create'
            ],
        ]
    ],
    [
        'name' => 'Tài Khoản',
        'icon' => 'fa fa-users',
        'active' => 'users',
        'items' => [
            [
                'name' => 'Danh sách tài khoản',
                'route' => 'users.index',
                'active' => 'users'
            ],
            [
                'name' => 'Thêm tài khoản',
                'route' => 'users.create',
                'active' => 'users/create'
            ],
        ]
    ],
    [
        'name' => 'Quản Lý Tệp',
        'icon' => 'fa fa-picture-o',
        'route' => 'admin.filemanager',
        'active' => 'filemanager'
    ],
];
