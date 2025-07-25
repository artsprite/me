<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/me/website/user/themes/quark/blueprints.yaml',
    'modified' => 1752983286,
    'size' => 4241,
    'data' => [
        'name' => 'Quark',
        'slug' => 'quark',
        'type' => 'theme',
        'version' => '2.1.1',
        'description' => 'New Grav Default Theme',
        'icon' => 'microchip',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'https://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-theme-quark',
        'demo' => 'https://demo.getgrav.org/onepage-skeleton',
        'keywords' => 'quark, spectre, theme, core, modern, fast, responsive, html5, css3',
        'bugs' => 'https://github.com/getgrav/grav-theme-quark/issues',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.6.0'
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'production-mode' => [
                    'type' => 'toggle',
                    'label' => 'THEME_QUARK.ADMIN.PRODUCTION_MODE',
                    'help' => 'THEME_QUARK.ADMIN.PRODUCTION_MODE_HELP',
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
                'grid-size' => [
                    'type' => 'select',
                    'label' => 'THEME_QUARK.ADMIN.GRID_SIZE',
                    'help' => 'THEME_QUARK.ADMIN.GRID_SIZE_HELP',
                    'size' => 'small',
                    'options' => [
                        '' => 'THEME_QUARK.ADMIN.GRID_SIZE_NONE',
                        'grid-xl' => 'THEME_QUARK.ADMIN.GRID_SIZE_EXTRA_LARGE',
                        'grid-lg' => 'THEME_QUARK.ADMIN.GRID_SIZE_LARGE',
                        'grid-md' => 'THEME_QUARK.ADMIN.GRID_SIZE_MEDIUM'
                    ]
                ],
                'header_section' => [
                    'type' => 'section',
                    'title' => 'THEME_QUARK.ADMIN.HEADER_DEFAULTS',
                    'underline' => true
                ],
                'custom_logo' => [
                    'type' => 'file',
                    'label' => 'THEME_QUARK.ADMIN.CUSTOM_LOGO',
                    'size' => 'large',
                    'destination' => 'theme://images/logo',
                    'multiple' => false,
                    'markdown' => true,
                    'description' => 'THEME_QUARK.ADMIN.CUSTOM_LOGO_DESCRIPTION',
                    'accept' => [
                        0 => 'image/*'
                    ]
                ],
                'custom_logo_mobile' => [
                    'type' => 'file',
                    'label' => 'THEME_QUARK.ADMIN.CUSTOM_LOGO_MOBILE',
                    'size' => 'large',
                    'destination' => 'theme://images/logo',
                    'multiple' => false,
                    'accept' => [
                        0 => 'image/*'
                    ]
                ],
                'header-fixed' => [
                    'type' => 'toggle',
                    'label' => 'THEME_QUARK.ADMIN.HEADER_FIXED',
                    'help' => 'THEME_QUARK.ADMIN.HEADER_FIXED_HELP',
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
                'header-animated' => [
                    'type' => 'toggle',
                    'label' => 'THEME_QUARK.ADMIN.HEADER_ANIMATED',
                    'help' => 'THEME_QUARK.ADMIN.HEADER_ANIMATED_HELP',
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
                'header-dark' => [
                    'type' => 'toggle',
                    'label' => 'THEME_QUARK.ADMIN.HEADER_DARK',
                    'help' => 'THEME_QUARK.ADMIN.HEADER_DARK_HELP',
                    'highlight' => 0,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'header-transparent' => [
                    'type' => 'toggle',
                    'label' => 'THEME_QUARK.ADMIN.HEADER_TRANSPARENT',
                    'help' => 'THEME_QUARK.ADMIN.HEADER_TRANSPARENT_HELP',
                    'highlight' => 0,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'footer_section' => [
                    'type' => 'section',
                    'title' => 'THEME_QUARK.ADMIN.FOOTER_DEFAULTS',
                    'underline' => true
                ],
                'sticky-footer' => [
                    'type' => 'toggle',
                    'label' => 'THEME_QUARK.ADMIN.STICKY_FOOTER',
                    'help' => 'THEME_QUARK.ADMIN.STICKY_FOOTER_HELP',
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
                'blog_section' => [
                    'type' => 'section',
                    'title' => 'THEME_QUARK.ADMIN.BLOG_DEFAULTS',
                    'underline' => true
                ],
                'blog-page' => [
                    'type' => 'text',
                    'label' => 'THEME_QUARK.ADMIN.BLOG_PAGE',
                    'help' => 'THEME_QUARK.ADMIN.BLOG_PAGE_HELP',
                    'size' => 'medium',
                    'default' => '/blog'
                ],
                'spectre_section' => [
                    'type' => 'section',
                    'title' => 'THEME_QUARK.ADMIN.SPECTRE_OPTIONS',
                    'underline' => true
                ],
                'spectre.exp' => [
                    'type' => 'toggle',
                    'label' => 'THEME_QUARK.ADMIN.SPECTRE_EXP',
                    'help' => 'THEME_QUARK.ADMIN.SPECTRE_EXP_HELP',
                    'highlight' => 0,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'spectre.icons' => [
                    'type' => 'toggle',
                    'label' => 'THEME_QUARK.ADMIN.SPECTRE_ICONS',
                    'help' => 'THEME_QUARK.ADMIN.SPECTRE_ICONS_HELP',
                    'highlight' => 0,
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
