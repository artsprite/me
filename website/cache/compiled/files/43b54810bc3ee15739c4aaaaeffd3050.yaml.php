<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/me/website/user/plugins/unitegallery/blueprints.yaml',
    'modified' => 1752983536,
    'size' => 1938,
    'data' => [
        'name' => 'Unitegallery',
        'version' => '1.1.3',
        'description' => 'This plugin adds twig function to create media galleries using Unitegallery js library',
        'icon' => 'th-large',
        'author' => [
            'name' => 'Anton Filimonov',
            'email' => 'anton.filimonov@gmail.com'
        ],
        'homepage' => 'https://github.com/variar/grav-plugin-unitegallery',
        'bugs' => 'https://github.com/variar/grav-plugin-unitegallery/issues',
        'license' => 'MIT',
        'keywords' => 'gallery, images, unitegallery',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'assets_in_meta' => [
                    'type' => 'toggle',
                    'label' => 'Store assets in page metadata',
                    'help' => 'Allows to pass assets from twig to this plugin in case of caching. Can be enabled per-page. Cache should be rebuilt after enabling this.',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'gallery_theme' => [
                    'type' => 'select',
                    'label' => 'Gallery theme',
                    'help' => 'Select theme for the gallery that will be used by default. Can be customized from twig.',
                    'default' => 'default',
                    'options' => [
                        'default' => 'Default',
                        'tiles' => 'Tiles',
                        'tilesgrid' => 'TilesGrid',
                        'carousel' => 'Carousel',
                        'compact' => 'Compact',
                        'grid' => 'Grid',
                        'slider' => 'Slider'
                    ]
                ],
                'gallery_div_id' => [
                    'type' => 'text',
                    'label' => 'Id for gallery div',
                    'help' => 'Use this to set desired div id for the main gallery div',
                    'default' => 'unite-gallery',
                    'validate' => [
                        'type' => 'text',
                        'pattern' => '^\\S+$',
                        'message' => 'Valid HTML5 element Id expected (no whitespace charachers allowed)'
                    ]
                ],
                'thumb_width' => [
                    'type' => 'number',
                    'label' => 'Thumbnail width',
                    'default' => 600,
                    'validate' => [
                        'type' => 'number',
                        'min' => 100
                    ]
                ],
                'thumb_height' => [
                    'type' => 'integer',
                    'label' => 'Thumbnail height',
                    'default' => 600,
                    'validate' => [
                        'type' => 'number',
                        'min' => 100
                    ]
                ]
            ]
        ]
    ]
];
