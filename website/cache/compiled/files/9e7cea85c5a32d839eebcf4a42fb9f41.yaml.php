<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/me/website/system/blueprints/user/account.yaml',
    'modified' => 1730133084,
    'size' => 4447,
    'data' => [
        'title' => 'Account',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'info' => [
                    'type' => 'userinfo',
                    'size' => 'large'
                ],
                'avatar' => [
                    'type' => 'file',
                    'size' => 'large',
                    'destination' => 'account://avatars',
                    'multiple' => false,
                    'random_name' => true
                ],
                'multiavatar_only' => [
                    'type' => 'conditional',
                    'condition' => 'config.system.accounts.avatar == \'multiavatar\'',
                    'fields' => [
                        'avatar_hash' => [
                            'type' => 'text',
                            'label' => '',
                            'placeholder' => 'e.g. dceaadcfda491f4e45',
                            'description' => 'PLUGIN_ADMIN.AVATAR_HASH',
                            'size' => 'large'
                        ]
                    ]
                ],
                'content' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_ADMIN.ACCOUNT',
                    'underline' => true
                ],
                'username' => [
                    'type' => 'text',
                    'size' => 'large',
                    'label' => 'PLUGIN_ADMIN.USERNAME',
                    'disabled' => true,
                    'readonly' => true
                ],
                'email' => [
                    'type' => 'email',
                    'size' => 'large',
                    'label' => 'PLUGIN_ADMIN.EMAIL',
                    'validate' => [
                        'type' => 'email',
                        'message' => 'PLUGIN_ADMIN.EMAIL_VALIDATION_MESSAGE',
                        'required' => true
                    ]
                ],
                'password' => [
                    'type' => 'password',
                    'size' => 'large',
                    'label' => 'PLUGIN_ADMIN.PASSWORD',
                    'autocomplete' => 'new-password',
                    'validate' => [
                        'required' => false,
                        'message' => 'PLUGIN_ADMIN.PASSWORD_VALIDATION_MESSAGE',
                        'config-pattern@' => 'system.pwd_regex'
                    ]
                ],
                'fullname' => [
                    'type' => 'text',
                    'size' => 'large',
                    'label' => 'PLUGIN_ADMIN.FULL_NAME',
                    'validate' => [
                        'required' => true
                    ]
                ],
                'title' => [
                    'type' => 'text',
                    'size' => 'large',
                    'label' => 'PLUGIN_ADMIN.TITLE'
                ],
                'language' => [
                    'type' => 'select',
                    'label' => 'PLUGIN_ADMIN.LANGUAGE',
                    'size' => 'medium',
                    'classes' => 'fancy',
                    'data-options@' => '\\Grav\\Plugin\\Admin\\Admin::adminLanguages',
                    'default' => 'en',
                    'help' => 'PLUGIN_ADMIN.LANGUAGE_HELP'
                ],
                'content_editor' => [
                    'type' => 'select',
                    'label' => 'PLUGIN_ADMIN.CONTENT_EDITOR',
                    'size' => 'medium',
                    'classes' => 'fancy',
                    'data-options@' => 'Grav\\Plugin\\Admin\\Admin::contentEditor',
                    'default' => 'default',
                    'help' => 'PLUGIN_ADMIN.CONTENT_EDITOR_HELP'
                ],
                'twofa_check' => [
                    'type' => 'conditional',
                    'condition' => 'config.plugins.admin.twofa_enabled',
                    'fields' => [
                        'twofa' => [
                            'title' => 'PLUGIN_ADMIN.2FA_TITLE',
                            'type' => 'section',
                            'underline' => true
                        ],
                        'twofa_enabled' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADMIN.2FA_ENABLED',
                            'classes' => 'twofa-toggle',
                            'highlight' => 1,
                            'default' => 0,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'twofa_secret' => [
                            'type' => '2fa_secret',
                            'outerclasses' => 'twofa-secret',
                            'markdown' => true,
                            'label' => 'PLUGIN_ADMIN.2FA_SECRET',
                            'sublabel' => 'PLUGIN_ADMIN.2FA_SECRET_HELP'
                        ],
                        'yubikey_id' => [
                            'type' => 'text',
                            'label' => 'PLUGIN_ADMIN.YUBIKEY_ID',
                            'description' => 'PLUGIN_ADMIN.YUBIKEY_HELP',
                            'size' => 'small',
                            'maxlength' => 12
                        ]
                    ]
                ],
                'security' => [
                    'security@' => 'admin.super',
                    'title' => 'PLUGIN_ADMIN.ACCESS_LEVELS',
                    'type' => 'section',
                    'underline' => true,
                    'fields' => [
                        'groups' => [
                            'security@' => 'admin.super',
                            'type' => 'select',
                            'multiple' => true,
                            'size' => 'large',
                            'label' => 'PLUGIN_ADMIN.GROUPS',
                            'data-options@' => '\\Grav\\Common\\User\\Group::groupNames',
                            'classes' => 'fancy',
                            'help' => 'PLUGIN_ADMIN.GROUPS_HELP',
                            'validate' => [
                                'type' => 'commalist'
                            ]
                        ],
                        'access' => [
                            'security@' => 'admin.super',
                            'type' => 'permissions',
                            'check_authorize' => true,
                            'label' => 'PLUGIN_ADMIN.PERMISSIONS',
                            'ignore_empty' => true,
                            'validate' => [
                                'type' => 'array',
                                'value_type' => 'bool'
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
