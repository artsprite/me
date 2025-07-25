<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/me/website/system/blueprints/pages/partials/security.yaml',
    'modified' => 1730133084,
    'size' => 1785,
    'data' => [
        'form' => [
            'fields' => [
                '_site' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_ADMIN.PAGE_ACCESS',
                    'underline' => true,
                    'fields' => [
                        'header.login.visibility_requires_access' => [
                            'type' => 'toggle',
                            'toggleable' => true,
                            'label' => 'PLUGIN_ADMIN.PAGE_VISIBILITY_REQUIRES_ACCESS',
                            'help' => 'PLUGIN_ADMIN.PAGE_VISIBILITY_REQUIRES_ACCESS_HELP',
                            'highlight' => 0,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'header.access' => [
                            'type' => 'acl_picker',
                            'label' => 'PLUGIN_ADMIN.PAGE_ACCESS',
                            'help' => 'PLUGIN_ADMIN.PAGE_ACCESS_HELP',
                            'ignore_empty' => true,
                            'data_type' => 'access',
                            'validate' => [
                                'type' => 'array',
                                'value_type' => 'bool'
                            ]
                        ]
                    ]
                ],
                '_admin' => [
                    'security@' => [
                        'or' => [
                            0 => 'admin.super',
                            1 => 'admin.configuration.pages'
                        ]
                    ],
                    'type' => 'section',
                    'title' => 'PLUGIN_ADMIN.PAGE PERMISSIONS',
                    'underline' => true,
                    'fields' => [
                        'header.permissions.inherit' => [
                            'type' => 'toggle',
                            'toggleable' => true,
                            'label' => 'PLUGIN_ADMIN.PAGE_INHERIT_PERMISSIONS',
                            'help' => 'PLUGIN_ADMIN.PAGE_INHERIT_PERMISSIONS_HELP',
                            'highlight' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'header.permissions.authors' => [
                            'type' => 'array',
                            'toggleable' => true,
                            'value_only' => true,
                            'placeholder_value' => 'PLUGIN_ADMIN.USERNAME',
                            'label' => 'PLUGIN_ADMIN.PAGE_AUTHORS',
                            'help' => 'PLUGIN_ADMIN.PAGE_AUTHORS_HELP'
                        ],
                        'header.permissions.groups' => [
                            'ignore@' => true,
                            'type' => 'acl_picker',
                            'label' => 'PLUGIN_ADMIN.PAGE_GROUPS',
                            'help' => 'PLUGIN_ADMIN.PAGE_GROUPS_HELP',
                            'ignore_empty' => true,
                            'data_type' => 'permissions'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
