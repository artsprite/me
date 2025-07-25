<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/me/website/user/plugins/breadcrumbs/blueprints.yaml',
    'modified' => 1752983535,
    'size' => 2333,
    'data' => [
        'name' => 'Breadcrumbs',
        'type' => 'plugin',
        'slug' => 'breadcrumbs',
        'version' => '1.6.2',
        'description' => 'The **Breadcrumbs** plugin provides a simple method to display the depth of your content/navigation structure.',
        'icon' => 'caret-square-o-right',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-breadcrumbs',
        'demo' => 'http://demo.getgrav.org/blog-skeleton',
        'keywords' => 'breadcrumbs, plugin, navigation, depth',
        'bugs' => 'https://github.com/getgrav/grav-plugin-breadcrumbs/issues',
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
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'show_all' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_BREADCRUMBS.SHOW_WITH_ONE_ITEM',
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
                'built_in_css' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_BREADCRUMBS.BUILTIN_CSS',
                    'highlight' => 1,
                    'default' => 1,
                    'help' => 'PLUGIN_BREADCRUMBS.BUILTIN_CSS_HELP',
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'include_home' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_BREADCRUMBS.INCLUDE_HOME',
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
                'include_current' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_BREADCRUMBS.INCLUDE_CURRENT_PAGE',
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
                'icon_home' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'label' => 'PLUGIN_BREADCRUMBS.ICON_HOME',
                    'default' => ''
                ],
                'icon_divider_classes' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'label' => 'PLUGIN_BREADCRUMBS.ICON_DIVIDER_CLASSES',
                    'default' => 'fa fa-angle-right'
                ],
                'link_trailing' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_BREADCRUMBS.LINK_TRAILING',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
