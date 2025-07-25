<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/me/website/system/blueprints/config/site.yaml',
    'modified' => 1730133084,
    'size' => 4268,
    'data' => [
        'title' => 'PLUGIN_ADMIN.SITE',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'content' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_ADMIN.DEFAULTS',
                    'underline' => true,
                    'fields' => [
                        'title' => [
                            'type' => 'text',
                            'label' => 'PLUGIN_ADMIN.SITE_TITLE',
                            'size' => 'large',
                            'placeholder' => 'PLUGIN_ADMIN.SITE_TITLE_PLACEHOLDER',
                            'help' => 'PLUGIN_ADMIN.SITE_TITLE_HELP'
                        ],
                        'default_lang' => [
                            'type' => 'text',
                            'label' => 'PLUGIN_ADMIN.SITE_DEFAULT_LANG',
                            'size' => 'x-small',
                            'placeholder' => 'PLUGIN_ADMIN.SITE_DEFAULT_LANG_PLACEHOLDER',
                            'help' => 'PLUGIN_ADMIN.SITE_DEFAULT_LANG_HELP'
                        ],
                        'author.name' => [
                            'type' => 'text',
                            'size' => 'large',
                            'label' => 'PLUGIN_ADMIN.DEFAULT_AUTHOR',
                            'help' => 'PLUGIN_ADMIN.DEFAULT_AUTHOR_HELP'
                        ],
                        'author.email' => [
                            'type' => 'text',
                            'size' => 'large',
                            'label' => 'PLUGIN_ADMIN.DEFAULT_EMAIL',
                            'help' => 'PLUGIN_ADMIN.DEFAULT_EMAIL_HELP',
                            'validate' => [
                                'type' => 'email'
                            ]
                        ],
                        'taxonomies' => [
                            'type' => 'selectize',
                            'size' => 'large',
                            'label' => 'PLUGIN_ADMIN.TAXONOMY_TYPES',
                            'classes' => 'fancy',
                            'help' => 'PLUGIN_ADMIN.TAXONOMY_TYPES_HELP',
                            'validate' => [
                                'type' => 'commalist'
                            ]
                        ]
                    ]
                ],
                'summary' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_ADMIN.PAGE_SUMMARY',
                    'underline' => true,
                    'fields' => [
                        'summary.enabled' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADMIN.ENABLED',
                            'highlight' => 1,
                            'help' => 'PLUGIN_ADMIN.ENABLED_HELP',
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'summary.size' => [
                            'type' => 'text',
                            'size' => 'small',
                            'append' => 'PLUGIN_ADMIN.CHARACTERS',
                            'label' => 'PLUGIN_ADMIN.SUMMARY_SIZE',
                            'help' => 'PLUGIN_ADMIN.SUMMARY_SIZE_HELP',
                            'validate' => [
                                'type' => 'int',
                                'min' => 0,
                                'max' => 65536
                            ]
                        ],
                        'summary.format' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADMIN.FORMAT',
                            'classes' => 'fancy',
                            'help' => 'PLUGIN_ADMIN.FORMAT_HELP',
                            'highlight' => 'short',
                            'options' => [
                                'short' => 'PLUGIN_ADMIN.SHORT',
                                'long' => 'PLUGIN_ADMIN.LONG'
                            ]
                        ],
                        'summary.delimiter' => [
                            'type' => 'text',
                            'size' => 'x-small',
                            'label' => 'PLUGIN_ADMIN.DELIMITER',
                            'help' => 'PLUGIN_ADMIN.DELIMITER_HELP'
                        ]
                    ]
                ],
                'metadata' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_ADMIN.METADATA',
                    'underline' => true,
                    'fields' => [
                        'metadata' => [
                            'type' => 'array',
                            'label' => 'PLUGIN_ADMIN.METADATA',
                            'help' => 'PLUGIN_ADMIN.METADATA_HELP',
                            'placeholder_key' => 'PLUGIN_ADMIN.METADATA_KEY',
                            'placeholder_value' => 'PLUGIN_ADMIN.METADATA_VALUE'
                        ]
                    ]
                ],
                'routes' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_ADMIN.REDIRECTS_AND_ROUTES',
                    'underline' => true,
                    'fields' => [
                        'redirects' => [
                            'type' => 'array',
                            'label' => 'PLUGIN_ADMIN.CUSTOM_REDIRECTS',
                            'help' => 'PLUGIN_ADMIN.CUSTOM_REDIRECTS_HELP',
                            'placeholder_key' => 'PLUGIN_ADMIN.CUSTOM_REDIRECTS_PLACEHOLDER_KEY',
                            'placeholder_value' => 'PLUGIN_ADMIN.CUSTOM_REDIRECTS_PLACEHOLDER_VALUE'
                        ],
                        'routes' => [
                            'type' => 'array',
                            'label' => 'PLUGIN_ADMIN.CUSTOM_ROUTES',
                            'help' => 'PLUGIN_ADMIN.CUSTOM_ROUTES_HELP',
                            'placeholder_key' => 'PLUGIN_ADMIN.CUSTOM_ROUTES_PLACEHOLDER_KEY',
                            'placeholder_value' => 'PLUGIN_ADMIN.CUSTOM_ROUTES_PLACEHOLDER_VALUE'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
