<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/me/website/user/plugins/markdown-notices/blueprints.yaml',
    'modified' => 1730133084,
    'size' => 1459,
    'data' => [
        'name' => 'Markdown Notices',
        'type' => 'plugin',
        'slug' => 'markdown-notices',
        'version' => '1.1.0',
        'description' => 'Adds the ability to render notices blocks in Markdown',
        'icon' => 'asterisk',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-markdown-notices',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.6.0'
            ]
        ],
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'built_in_css' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_MARKDOWN_NOTICES.USE_BUILT_IN_CSS',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'base_classes' => [
                    'type' => 'selectize',
                    'label' => 'PLUGIN_MARKDOWN_NOTICES.BASE_CLASSES',
                    'size' => 'large',
                    'placeholder' => 'PLUGIN_MARKDOWN_NOTICES.BASE_CLASSES_PLACEHOLDER',
                    'help' => 'PLUGIN_MARKDOWN_NOTICES.BASE_CLASSES_HELP',
                    'classes' => 'fancy',
                    'validate' => [
                        'type' => 'string'
                    ]
                ],
                'level_classes' => [
                    'type' => 'selectize',
                    'label' => 'PLUGIN_MARKDOWN_NOTICES.LEVEL_CLASSES',
                    'size' => 'large',
                    'placeholder' => 'PLUGIN_MARKDOWN_NOTICES.LEVEL_CLASSES_PLACEHOLDER',
                    'help' => 'PLUGIN_MARKDOWN_NOTICES.LEVEL_CLASSES_HELP',
                    'classes' => 'fancy',
                    'validate' => [
                        'type' => 'commalist'
                    ]
                ]
            ]
        ]
    ]
];
