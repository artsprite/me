<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/me/website/user/themes/delivernext/blueprints/theme/settings.yaml',
    'modified' => 1752983460,
    'size' => 6137,
    'data' => [
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'theme_section_settings' => [
                    'type' => 'columns',
                    'fields' => [
                        'settings' => [
                            'type' => 'column',
                            'classes' => 'colum_admin',
                            'fields' => [
                                'configOptions' => [
                                    'type' => 'section',
                                    'outerclasses' => 'admin_section',
                                    'heading_classes' => 'admin_options',
                                    'title' => 'DELIVERNEXT.ADMIN.THEME.SETTINGS.THEME_CONFIG',
                                    'underline' => false,
                                    'fields' => [
                                        'dropdown.enabled' => [
                                            'type' => 'toggle',
                                            'label' => 'DELIVERNEXT.ADMIN.THEME.SETTINGS.DROPDOWN_MENU',
                                            'labelclasses' => 'bold',
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
                                        'production-mode' => [
                                            'type' => 'toggle',
                                            'label' => 'DELIVERNEXT.ADMIN.THEME.SETTINGS.PRODUCTION_MODE',
                                            'help' => 'DELIVERNEXT.ADMIN.THEME.SETTINGS.PRODUCTION_MODE_HELP',
                                            'labelclasses' => 'bold',
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
                                        'sticky_menu.enabled' => [
                                            'type' => 'toggle',
                                            'label' => 'DELIVERNEXT.ADMIN.THEME.SETTINGS.STICKY_MENU',
                                            'labelclasses' => 'bold',
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
                                        'back_to_top_button.enabled' => [
                                            'type' => 'toggle',
                                            'label' => 'DELIVERNEXT.ADMIN.THEME.SETTINGS.BACK_TO_TOP_BUTTON',
                                            'help' => 'DELIVERNEXT.ADMIN.THEME.SETTINGS.BACK_TO_TOP_BUTTON_HELP',
                                            'labelclasses' => 'bold',
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
                                        'custom_css' => [
                                            'type' => 'toggle',
                                            'label' => 'DELIVERNEXT.ADMIN.THEME.SETTINGS.CUSTOM_CSS',
                                            'help' => 'DELIVERNEXT.ADMIN.THEME.SETTINGS.CUSTOM_CSS_HELP',
                                            'labelclasses' => 'bold',
                                            'highlight' => 0,
                                            'default' => 0,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.ENABLED',
                                                0 => 'PLUGIN_ADMIN.DISABLED'
                                            ]
                                        ],
                                        'custom_js' => [
                                            'type' => 'toggle',
                                            'label' => 'DELIVERNEXT.ADMIN.THEME.SETTINGS.CUSTOM_JS',
                                            'help' => 'DELIVERNEXT.ADMIN.THEME.SETTINGS.CUSTOM_JS_HELP',
                                            'labelclasses' => 'bold',
                                            'highlight' => 0,
                                            'default' => 0,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.ENABLED',
                                                0 => 'PLUGIN_ADMIN.DISABLED'
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'logo' => [
                            'type' => 'column',
                            'classes' => 'colum_admin',
                            'fields' => [
                                'logo_options' => [
                                    'type' => 'section',
                                    'title' => 'DELIVERNEXT.ADMIN.THEME.SETTINGS.LOGO.TITLE',
                                    'underline' => false,
                                    'outerclasses' => 'admin_section',
                                    'heading_classes' => 'admin_options',
                                    'fields' => [
                                        'theme_logo_enabled' => [
                                            'type' => 'toggle',
                                            'label' => 'DELIVERNEXT.ADMIN.THEME.SETTINGS.LOGO.ENABLED',
                                            'labelclasses' => 'bold',
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
                                        'theme_logo' => [
                                            'type' => 'file',
                                            'label' => 'DELIVERNEXT.ADMIN.THEME.SETTINGS.LOGO.DESKTOP',
                                            'description' => 'DELIVERNEXT.ADMIN.THEME.SETTINGS.LOGO.DESCRIPTION',
                                            'labelclasses' => 'bold',
                                            'multiple' => false,
                                            'destination' => 'theme@:/images/logo',
                                            'avoid_overwriting' => false,
                                            'random_name' => false,
                                            'accept' => [
                                                0 => 'image/*'
                                            ]
                                        ],
                                        'theme_logo_mobile' => [
                                            'type' => 'file',
                                            'label' => 'DELIVERNEXT.ADMIN.THEME.SETTINGS.LOGO.MOBILE',
                                            'labelclasses' => 'bold',
                                            'size' => 'large',
                                            'destination' => 'theme://images/logo',
                                            'multiple' => false,
                                            'accept' => [
                                                0 => 'image/*'
                                            ]
                                        ],
                                        'type_logo_header' => [
                                            'type' => 'radio',
                                            'label' => 'DELIVERNEXT.ADMIN.THEME.SETTINGS.LOGO.TYPE_LOGO_HEADER',
                                            'help' => 'DELIVERNEXT.ADMIN.THEME.SETTINGS.LOGO.TYPE_LOGO_HEADER_HELP',
                                            'labelclasses' => 'bold',
                                            'default' => 'text',
                                            'options' => [
                                                'image' => 'DELIVERNEXT.ADMIN.THEME.SETTINGS.LOGO.TYPE_LOGO_HEADER_IMAGE',
                                                'text' => 'DELIVERNEXT.ADMIN.THEME.SETTINGS.LOGO.TYPE_LOGO_HEADER_TEXT',
                                                'both' => 'DELIVERNEXT.ADMIN.THEME.SETTINGS.LOGO.TYPE_LOGO_HEADER_BOTH'
                                            ]
                                        ],
                                        'favicon' => [
                                            'type' => 'file',
                                            'label' => 'DELIVERNEXT.ADMIN.THEME.SETTINGS.FAVICON',
                                            'description' => 'DELIVERNEXT.ADMIN.THEME.SETTINGS.FAVICON_DESCRIPTION',
                                            'labelclasses' => 'bold',
                                            'destination' => 'theme@:/images',
                                            'multiple' => false,
                                            'avoid_overwriting' => false,
                                            'random_name' => false,
                                            'toggleable' => true,
                                            'filesize' => 3,
                                            'accept' => [
                                                0 => 'image/png',
                                                1 => '.ico'
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
