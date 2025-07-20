<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/me/website/user/config/plugins/archives.yaml',
    'modified' => 1752983464,
    'size' => 533,
    'data' => [
        'enabled' => true,
        'built_in_css' => true,
        'date_display_format' => 'F Y',
        'show_count' => true,
        'limit' => 12,
        'taxonomy_names' => [
            'month' => 'archives_month',
            'year' => 'archives_year'
        ],
        'taxonomy_values' => [
            'month' => 'M_Y',
            'year' => 'Y'
        ],
        'order' => [
            'by' => 'date',
            'dir' => 'desc'
        ],
        'filters' => [
            'category' => 'blog'
        ],
        'filter_combinator' => 'and',
        'page_specific_config' => [
            0 => [
                'route' => '/blog',
                'filters' => [
                    'page@' => '/blog'
                ],
                'filter_combinator' => 'and',
                'order_by' => NULL,
                'order_dir' => NULL
            ],
            1 => [
                'route' => '/archive',
                'filters' => [
                    'page@' => '/blog'
                ],
                'filter_combinator' => 'and',
                'order_by' => NULL,
                'order_dir' => NULL
            ]
        ]
    ]
];
