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
        'icon' => 'fa fa-list',
        'active' => 'categories',
        'items' => [
            [
                'name' => 'Danh sách danh mục',
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
                'name' => 'Danh sách menu',
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
        'name' => 'Sản Phẩm',
        'icon' => 'fa fa-product-hunt',
        'active' => 'products',
        'items' => [
            [
                'name' => 'Danh sách sản phẩm',
                'route' => 'products.index',
                'active' => 'products'
            ],
            [
                'name' => 'Thêm sản phẩm',
                'route' => 'products.create',
                'active' => 'products/create'
            ],
        ]
    ],
    [
        'name' => 'Slider',
        'icon' => 'fa fa-sliders',
        'active' => 'sliders',
        'items' => [
            [
                'name' => 'Danh sách sliders',
                'route' => 'sliders.index',
                'active' => 'sliders'
            ],
            [
                'name' => 'Thêm sliders',
                'route' => 'sliders.create',
                'active' => 'sliders/create'
            ],
        ]
    ],
    [
        'name' => 'Bài Viết',
        'icon' => 'fa fa-pencil-square-o',
        'active' => 'posts',
        'items' => [
            [
                'name' => 'Danh sách bài viết',
                'route' => 'posts.index',
                'active' => 'posts'
            ],
            [
                'name' => 'Thêm bài viết',
                'route' => 'posts.create',
                'active' => 'posts/create'
            ],
        ]
    ],
    [
        'name' => 'Bình Luận',
        'icon' => 'fa fa-commenting-o',
        'active' => 'comments',
        'items' => [
            [
                'name' => 'Danh sách bình luận',
                'route' => 'comments.index',
                'active' => 'comments'
            ],
        ]
    ],
    [
        'name' => 'Đơn Hàng',
        'icon' => 'fa fa-shopping-cart',
        'active' => 'orders',
        'items' => [
            [
                'name' => 'Danh sách đơn hàng',
                'route' => 'orders.index',
                'active' => 'orders'
            ],
        ]
    ],
    [
        'name' => 'Cài đặt',
        'icon' => 'fa fa-cog',
        'active' => 'settings',
        'items' => [
            [
                'name' => 'Danh sách cài đặt',
                'route' => 'settings.index',
                'active' => 'settings'
            ],
            [
                'name' => 'Thêm cài đặt',
                'route' => 'settings.create',
                'active' => 'settings/create'
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
