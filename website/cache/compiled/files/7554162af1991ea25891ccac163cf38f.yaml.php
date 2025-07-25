<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/me/website/user/plugins/email/blueprints.yaml',
    'modified' => 1736146088,
    'size' => 3899,
    'data' => [
        'name' => 'Email',
        'slug' => 'email',
        'type' => 'plugin',
        'version' => '4.1.2',
        'testing' => false,
        'description' => 'Enables the emailing system for Grav',
        'icon' => 'envelope',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'keywords' => 'plugin, email, sender',
        'homepage' => 'https://github.com/getgrav/grav-plugin-email',
        'bugs' => 'https://github.com/getgrav/grav-plugin-email/issues',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.7.41'
            ],
            1 => [
                'name' => 'form',
                'version' => '>=7.0.0'
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'enabled' => [
                    'type' => 'hidden',
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
                'mailer.engine' => [
                    'type' => 'select',
                    'label' => 'PLUGIN_EMAIL.MAIL_ENGINE',
                    'size' => 'medium',
                    'description' => 'PLUGIN_EMAIL.MAIL_ENGINE_DESC',
                    'data-options@' => '\\Grav\\Plugin\\EmailPlugin::getEngines'
                ],
                'smtp_config' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_EMAIL.SMTP_CONFIGURATION',
                    'underline' => true
                ],
                'mailer.smtp.server' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'label' => 'PLUGIN_EMAIL.SMTP_SERVER',
                    'placeholder' => 'PLUGIN_EMAIL.SMTP_SERVER_PLACEHOLDER'
                ],
                'mailer.smtp.port' => [
                    'type' => 'text',
                    'size' => 'small',
                    'label' => 'PLUGIN_EMAIL.SMTP_PORT',
                    'placeholder' => 'PLUGIN_EMAIL.SMTP_PORT_PLACEHOLDER',
                    'validate' => [
                        'type' => 'number',
                        'min' => 1,
                        'max' => 65535
                    ]
                ],
                'mailer.smtp.encryption' => [
                    'type' => 'select',
                    'size' => 'medium',
                    'label' => 'PLUGIN_EMAIL.SMTP_ENCRYPTION',
                    'options' => [
                        'none' => 'PLUGIN_EMAIL.SMTP_ENCRYPTION_NONE',
                        'ssl' => 'SSL',
                        'tls' => 'TLS'
                    ]
                ],
                'mailer.smtp.user' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'autocomplete' => 'off',
                    'label' => 'PLUGIN_EMAIL.SMTP_LOGIN_NAME'
                ],
                'mailer.smtp.password' => [
                    'type' => 'password',
                    'size' => 'medium',
                    'autocomplete' => 'new-password',
                    'label' => 'PLUGIN_EMAIL.SMTP_PASSWORD'
                ],
                'sendmail_config' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_EMAIL.SENDMAIL_CONFIGURATION',
                    'underline' => true
                ],
                'mailer.sendmail.bin' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'label' => 'PLUGIN_EMAIL.PATH_TO_SENDMAIL',
                    'placeholder' => '/usr/sbin/sendmail'
                ],
                'email_Defaults' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_EMAIL.EMAIL_DEFAULTS',
                    'underline' => true
                ],
                'content_type' => [
                    'type' => 'select',
                    'label' => 'PLUGIN_EMAIL.CONTENT_TYPE',
                    'size' => 'medium',
                    'default' => 'text/html',
                    'options' => [
                        'text/plain' => 'PLUGIN_EMAIL.CONTENT_TYPE_PLAIN_TEXT',
                        'text/html' => 'HTML'
                    ]
                ],
                'from' => [
                    'type' => 'text',
                    'size' => 'large',
                    'label' => 'PLUGIN_EMAIL.EMAIL_FORM',
                    'placeholder' => 'PLUGIN_EMAIL.EMAIL_FORM_PLACEHOLDER',
                    'help' => 'PLUGIN_EMAIL.EMAIL_FORMAT',
                    'validate' => [
                        'required' => true
                    ]
                ],
                'to' => [
                    'type' => 'text',
                    'size' => 'large',
                    'label' => 'PLUGIN_EMAIL.EMAIL_TO',
                    'placeholder' => 'PLUGIN_EMAIL.EMAIL_TO_PLACEHOLDER',
                    'help' => 'PLUGIN_EMAIL.EMAIL_FORMAT',
                    'validate' => [
                        'required' => true
                    ]
                ],
                'cc' => [
                    'type' => 'text',
                    'size' => 'large',
                    'label' => 'PLUGIN_EMAIL.EMAIL_CC',
                    'placeholder' => 'PLUGIN_EMAIL.EMAIL_CC_PLACEHOLDER',
                    'help' => 'PLUGIN_EMAIL.EMAIL_FORMAT'
                ],
                'bcc' => [
                    'type' => 'text',
                    'size' => 'large',
                    'label' => 'PLUGIN_EMAIL.EMAIL_BCC',
                    'placeholder' => 'PLUGIN_EMAIL.EMAIL_BCC_PLACEHOLDER',
                    'help' => 'PLUGIN_EMAIL.EMAIL_FORMAT'
                ],
                'reply_to' => [
                    'type' => 'text',
                    'size' => 'large',
                    'label' => 'PLUGIN_EMAIL.EMAIL_REPLY_TO',
                    'placeholder' => 'PLUGIN_EMAIL.EMAIL_REPLY_TO_PLACEHOLDER',
                    'help' => 'PLUGIN_EMAIL.EMAIL_FORMAT'
                ],
                'body' => [
                    'type' => 'textarea',
                    'size' => 'large',
                    'rows' => 10,
                    'label' => 'PLUGIN_EMAIL.EMAIL_BODY',
                    'placeholder' => 'PLUGIN_EMAIL.EMAIL_BODY_PLACEHOLDER'
                ],
                'advanced_section' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_EMAIL.ADVANCED',
                    'underline' => true
                ],
                'debug' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_EMAIL.DEBUG',
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
