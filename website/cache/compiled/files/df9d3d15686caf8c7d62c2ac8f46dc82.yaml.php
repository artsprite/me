<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/me/website/user/themes/delivernext/blueprints.yaml',
    'modified' => 1752983460,
    'size' => 1451,
    'data' => [
        'name' => 'DeliverNext',
        'slug' => 'delivernext',
        'type' => 'theme',
        'version' => '1.4.0',
        'description' => 'DeliverNext theme is a port of the original Deliver Grav theme.',
        'icon' => 'newspaper-o',
        'author' => [
            'name' => 'Pedro Moreno',
            'email' => 'pmoreno@pmdesign.dev'
        ],
        'homepage' => 'https://github.com/pmoreno-rodriguez/grav-theme-delivernext',
        'demo' => 'https://delivernext.pmdesign.dev/',
        'keywords' => 'deliver, theme, modern, fast, responsive, html5, css3',
        'bugs' => 'https://github.com/pmoreno-rodriguez/grav-theme-delivernext/issues',
        'readme' => 'https://github.com/pmoreno-rodriguez/grav-theme-delivernext/blob/develop/README.md',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.7.8'
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'theme_settings' => [
                            'type' => 'tab',
                            'title' => 'DELIVERNEXT.ADMIN.THEME.SETTINGS.TAB',
                            'import@' => [
                                'type' => 'theme/settings.yaml',
                                'context' => 'blueprints://'
                            ]
                        ],
                        'header' => [
                            'type' => 'tab',
                            'title' => 'DELIVERNEXT.ADMIN.THEME.HEADER.TAB',
                            'import@' => [
                                'type' => 'theme/header.yaml',
                                'context' => 'blueprints://'
                            ]
                        ],
                        'footer' => [
                            'type' => 'tab',
                            'title' => 'DELIVERNEXT.ADMIN.THEME.FOOTER.TAB',
                            'import@' => [
                                'type' => 'theme/footer.yaml',
                                'context' => 'blueprints://'
                            ]
                        ],
                        'social_media' => [
                            'type' => 'tab',
                            'title' => 'DELIVERNEXT.ADMIN.THEME.MEDIA.TAB',
                            'import@' => [
                                'type' => 'theme/media.yaml',
                                'context' => 'blueprints://'
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
