<?php

return [

    'name' => 'yootheme/builder-list',

    'builder' => 'list',

    'inject' => [

        'view' => 'app.view',

    ],

    'render' => function ($element) {
        return $this->view->render('@builder/list/template', compact('element'));
    },

    'config' => [

        'element' => true,
        'defaults' => [

            'show_image' => true,
            'show_link' => true,
            'image_align' => 'left',

        ],

    ],

    'default' => [

        'children' => array_fill(0, 3, [
            'type' => 'list_item',
        ])

    ],

    'include' => [

        'yootheme/builder-list-item' => [

            'builder' => 'list_item',

            'default' => [

                'props' => [
                    'content' => 'Item',
                ],

            ],

        ],

    ],

];
