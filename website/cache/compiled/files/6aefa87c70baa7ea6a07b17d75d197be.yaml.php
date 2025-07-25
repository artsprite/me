<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/me/website/user/plugins/form/blueprints.yaml',
    'modified' => 1730133084,
    'size' => 10788,
    'data' => [
        'name' => 'Form',
        'slug' => 'form',
        'type' => 'plugin',
        'version' => '7.4.2',
        'description' => 'Enables forms handling and processing',
        'icon' => 'check-square',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'https://getgrav.org'
        ],
        'keywords' => 'plugin, form',
        'homepage' => 'https://github.com/getgrav/grav-plugin-form',
        'bugs' => 'https://github.com/getgrav/grav-plugin-form/issues',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.7.41'
            ]
        ],
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'hidden',
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
                'general' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_FORM.GENERAL',
                    'fields' => [
                        'debug' => [
                            'type' => 'toggle',
                            'label' => 'Debug',
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
                            'label' => 'PLUGIN_FORM.USE_BUILT_IN_CSS',
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
                        'inline_css' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_FORM.USE_INLINE_CSS',
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
                        'refresh_prevention' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_FORM.REFRESH_PREVENTION',
                            'help' => 'PLUGIN_FORM.REFRESH_PREVENTION_HELP',
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
                        'client_side_validation' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_FORM.CLIENT_SIDE_VALIDATION',
                            'help' => 'PLUGIN_FORM.CLIENT_SIDE_VALIDATION_HELP',
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
                        'inline_errors' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_FORM.INLINE_ERRORS',
                            'help' => 'PLUGIN_FORM.INLINE_ERRORS_HELP',
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
                        'modular_form_fix' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_FORM.MODULAR_FORM_FIX',
                            'help' => 'PLUGIN_FORM.MODULAR_FORM_FIX_HELP',
                            'highlight' => 1,
                            'default' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.ENABLED',
                                0 => 'PLUGIN_ADMIN.DISABLED'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ]
                    ]
                ],
                'files' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_FORM.FILES',
                    'fields' => [
                        'files.multiple' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_FORM.ALLOW_MULTIPLE',
                            'help' => 'PLUGIN_FORM.ALLOW_MULTIPLE_HELP',
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
                        'files.limit' => [
                            'type' => 'text',
                            'size' => 'x-small',
                            'label' => 'PLUGIN_FORM.LIMIT',
                            'help' => 'PLUGIN_FORM.LIMIT_HELP',
                            'default' => 10,
                            'validate' => [
                                'type' => 'number',
                                'min' => 1
                            ]
                        ],
                        'files.destination' => [
                            'type' => 'text',
                            'size' => 'large',
                            'label' => 'PLUGIN_FORM.DESTINATION',
                            'help' => 'PLUGIN_FORM.DESTINATION_HELP',
                            'default' => '@self'
                        ],
                        'files.accept' => [
                            'type' => 'selectize',
                            'size' => 'large',
                            'label' => 'PLUGIN_FORM.ACCEPT',
                            'help' => 'PLUGIN_FORM.ACCEPT_HELP',
                            'classes' => 'fancy',
                            'default' => [
                                0 => 'image/*'
                            ],
                            'validate' => [
                                'type' => 'commalist'
                            ]
                        ],
                        'files.filesize' => [
                            'type' => 'text',
                            'label' => 'PLUGIN_FORM.FILESIZE',
                            'help' => 'PLUGIN_FORM.FILESIZE_HELP',
                            'size' => 'x-small',
                            'default' => 5,
                            'validate' => [
                                'type' => 'number',
                                'min' => 0
                            ]
                        ],
                        'files.avoid_overwriting' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_FORM.AVOID_OVERWRITING',
                            'help' => 'PLUGIN_FORM.AVOID_OVERWRITING_HELP',
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
                        'files.random_name' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_FORM.RANDOM_NAME',
                            'help' => 'PLUGIN_FORM.RANDOM_NAME_HELP',
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
                ],
                'recaptcha' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_FORM.RECAPTCHA',
                    'fields' => [
                        'recaptcha.version' => [
                            'type' => 'select',
                            'label' => 'PLUGIN_FORM.RECAPTCHA_VERSION',
                            'default' => '2-checkbox',
                            'options' => [
                                '2-checkbox' => 'PLUGIN_FORM.RECAPTCHA_VERSION_V2_CHECKBOX',
                                '2-invisible' => 'PLUGIN_FORM.RECAPTCHA_VERSION_V2_INVISIBLE',
                                3 => 'PLUGIN_FORM.RECAPTCHA_VERSION_V3_LATEST'
                            ]
                        ],
                        'recaptcha.theme' => [
                            'type' => 'select',
                            'label' => 'PLUGIN_FORM.RECAPTCHA_THEME',
                            'default' => 'light',
                            'options' => [
                                'light' => 'PLUGIN_FORM.RECAPTCHA_THEME_LIGHT',
                                'dark' => 'PLUGIN_FORM.RECAPTCHA_THEME_DARK'
                            ],
                            'recaptcha.site_key' => NULL
                        ],
                        'recaptcha.site_key' => [
                            'type' => 'text',
                            'label' => 'PLUGIN_FORM.RECAPTCHA_SITE_KEY',
                            'help' => 'PLUGIN_FORM.RECAPTCHA_SITE_KEY_HELP',
                            'default' => ''
                        ],
                        'recaptcha.secret_key' => [
                            'type' => 'text',
                            'label' => 'PLUGIN_FORM.RECAPTCHA_SECRET_KEY',
                            'help' => 'PLUGIN_FORM.RECAPTCHA_SECRET_KEY_HELP',
                            'default' => ''
                        ]
                    ]
                ],
                'turnstile_captcha' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_FORM.TURNSTILE_CAPTCHA',
                    'fields' => [
                        'turnstile.theme' => [
                            'type' => 'select',
                            'label' => 'PLUGIN_FORM.RECAPTCHA_THEME',
                            'default' => 'light',
                            'options' => [
                                'light' => 'PLUGIN_FORM.RECAPTCHA_THEME_LIGHT',
                                'dark' => 'PLUGIN_FORM.RECAPTCHA_THEME_DARK'
                            ]
                        ],
                        'turnstile.site_key' => [
                            'type' => 'text',
                            'label' => 'PLUGIN_FORM.RECAPTCHA_SITE_KEY',
                            'help' => 'PLUGIN_FORM.RECAPTCHA_SITE_KEY_HELP',
                            'default' => ''
                        ],
                        'turnstile.secret_key' => [
                            'type' => 'text',
                            'label' => 'PLUGIN_FORM.RECAPTCHA_SECRET_KEY',
                            'help' => 'PLUGIN_FORM.RECAPTCHA_SECRET_KEY_HELP',
                            'default' => ''
                        ]
                    ]
                ],
                'basic_captcha' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_FORM.BASIC_CAPTCHA',
                    'fields' => [
                        'basic_captcha.type' => [
                            'type' => 'elements',
                            'label' => 'PLUGIN_FORM.BASIC_CAPTCHA_TYPE',
                            'default' => 'characters',
                            'size' => 'medium',
                            'options' => [
                                'characters' => 'Random Characters',
                                'math' => 'Math Puzzle'
                            ],
                            'fields' => [
                                'characters' => [
                                    'type' => 'element',
                                    'fields' => [
                                        'basic_captcha.chars.length' => [
                                            'type' => 'range',
                                            'label' => 'PLUGIN_FORM.BASIC_CAPTCHA_LENGTH',
                                            'default' => 6,
                                            'validate' => [
                                                'min' => 4,
                                                'max' => 12
                                            ],
                                            'append' => 'characters'
                                        ],
                                        'basic_captcha.chars.font' => [
                                            'type' => 'select',
                                            'label' => 'PLUGIN_FORM.BASIC_CAPTCHA_FONT',
                                            'default' => 'zxx-noise.ttf',
                                            'options' => [
                                                'zxx-noise.ttf' => 'zxx-Noise',
                                                'zxx-xed.ttf' => 'zxx-Xed',
                                                'zxx-camo.ttf' => 'zxx-Camo',
                                                'zxx-sans.ttf' => 'zxx-Sans'
                                            ]
                                        ],
                                        'basic_captcha.chars.size' => [
                                            'type' => 'range',
                                            'label' => 'PLUGIN_FORM.BASIC_CAPTCHA_SIZE',
                                            'default' => 24,
                                            'append' => 'px',
                                            'validate' => [
                                                'min' => 12,
                                                'max' => 32,
                                                'step' => 2
                                            ]
                                        ],
                                        'basic_captcha.chars.bg' => [
                                            'type' => 'colorpicker',
                                            'size' => 'small',
                                            'label' => 'PLUGIN_FORM.BASIC_CAPTCHA_BG_COLOR',
                                            'default' => '#ffffff'
                                        ],
                                        'basic_captcha.chars.text' => [
                                            'type' => 'colorpicker',
                                            'size' => 'small',
                                            'label' => 'PLUGIN_FORM.BASIC_CAPTCHA_TEXT_COLOR',
                                            'default' => '#000000'
                                        ],
                                        'basic_captcha.chars.start_x' => [
                                            'type' => 'number',
                                            'label' => 'PLUGIN_FORM.BASIC_CAPTCHA_START_X',
                                            'default' => 5,
                                            'append' => 'px',
                                            'size' => 'small',
                                            'validate' => [
                                                'min' => 0,
                                                'type' => 'number'
                                            ]
                                        ],
                                        'basic_captcha.chars.start_y' => [
                                            'type' => 'number',
                                            'label' => 'PLUGIN_FORM.BASIC_CAPTCHA_START_Y',
                                            'default' => 30,
                                            'append' => 'px',
                                            'size' => 'small',
                                            'validate' => [
                                                'min' => 0,
                                                'type' => 'number'
                                            ]
                                        ],
                                        'basic_captcha.chars.box_width' => [
                                            'type' => 'number',
                                            'label' => 'PLUGIN_FORM.BASIC_CAPTCHA_BOX_WIDTH',
                                            'default' => 135,
                                            'append' => 'px',
                                            'size' => 'small',
                                            'validate' => [
                                                'min' => 0,
                                                'type' => 'number'
                                            ]
                                        ],
                                        'basic_captcha.chars.box_height' => [
                                            'type' => 'number',
                                            'label' => 'PLUGIN_FORM.BASIC_CAPTCHA_BOX_HEIGHT',
                                            'default' => 40,
                                            'append' => 'px',
                                            'size' => 'small',
                                            'validate' => [
                                                'min' => 0,
                                                'type' => 'number'
                                            ]
                                        ]
                                    ]
                                ],
                                'math' => [
                                    'type' => 'element',
                                    'fields' => [
                                        'basic_captcha.math.min' => [
                                            'type' => 'number',
                                            'label' => 'PLUGIN_FORM.BASIC_CAPTCHA_MATH_MIN',
                                            'default' => 1,
                                            'size' => 'small',
                                            'validate' => [
                                                'min' => 0,
                                                'type' => 'number'
                                            ]
                                        ],
                                        'basic_captcha.math.max' => [
                                            'type' => 'number',
                                            'label' => 'PLUGIN_FORM.BASIC_CAPTCHA_MATH_MAX',
                                            'default' => 10,
                                            'size' => 'small',
                                            'validate' => [
                                                'min' => 1,
                                                'type' => 'number'
                                            ]
                                        ],
                                        'basic_captcha.math.operators' => [
                                            'type' => 'selectize',
                                            'selectize' => [
                                                'options' => [
                                                    0 => [
                                                        'value' => '+',
                                                        'text' => '+ Addition'
                                                    ],
                                                    1 => [
                                                        'value' => '-',
                                                        'text' => '- Subtraction'
                                                    ],
                                                    2 => [
                                                        'value' => '*',
                                                        'text' => 'x Multiplication'
                                                    ],
                                                    3 => [
                                                        'value' => '/',
                                                        'text' => '/ Division'
                                                    ]
                                                ]
                                            ],
                                            'label' => 'PLUGIN_FORM.BASIC_CAPTCHA_MATH_OPERATORS',
                                            'validate' => [
                                                'type' => 'commalist'
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
