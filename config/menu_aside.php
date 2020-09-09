<?php
// Aside menu
return [

    'items' => [
        // Dashboard
        [
            'title' => 'Dashboard',
            'root' => true,
            'icon' => 'media/svg/icons/Design/Layers.svg', // or can be 'flaticon-home' or any flaticon-*
            'page' => '/',
            'new-tab' => false,
        ],


        // Layout
        [
            'section' => 'Título sección',
        ],
        [
            'title' => 'Themes',
            'desc' => '',
            'icon' => 'media/svg/icons/Design/Bucket.svg',
            'bullet' => 'dot',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'Light Aside',
                    'page' => 'layout/themes/aside-light'
                ],
                [
                    'title' => 'Dark Header',
                    'page' => 'layout/themes/header-dark'
                ]
            ]
        ],
    ]

];
