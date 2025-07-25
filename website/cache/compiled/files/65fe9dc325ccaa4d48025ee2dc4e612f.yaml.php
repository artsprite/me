<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/me/website/system/config/permissions.yaml',
    'modified' => 1730133084,
    'size' => 810,
    'data' => [
        'actions' => [
            'site' => [
                'type' => 'access',
                'label' => 'Site'
            ],
            'admin' => [
                'type' => 'access',
                'label' => 'Admin'
            ],
            'admin.pages' => [
                'type' => 'access',
                'label' => 'Pages'
            ],
            'admin.users' => [
                'type' => 'access',
                'label' => 'User Accounts'
            ]
        ],
        'types' => [
            'default' => [
                'type' => 'access'
            ],
            'crud' => [
                'type' => 'compact',
                'letters' => [
                    'c' => [
                        'action' => 'create',
                        'label' => 'PLUGIN_ADMIN.CREATE'
                    ],
                    'r' => [
                        'action' => 'read',
                        'label' => 'PLUGIN_ADMIN.READ'
                    ],
                    'u' => [
                        'action' => 'update',
                        'label' => 'PLUGIN_ADMIN.UPDATE'
                    ],
                    'd' => [
                        'action' => 'delete',
                        'label' => 'PLUGIN_ADMIN.DELETE'
                    ]
                ]
            ],
            'crudp' => [
                'type' => 'crud',
                'letters' => [
                    'p' => [
                        'action' => 'publish',
                        'label' => 'PLUGIN_ADMIN.PUBLISH'
                    ]
                ]
            ],
            'crudl' => [
                'type' => 'crud',
                'letters' => [
                    'l' => [
                        'action' => 'list',
                        'label' => 'PLUGIN_ADMIN.LIST'
                    ]
                ]
            ],
            'crudpl' => [
                'type' => 'crud',
                'use' => [
                    0 => 'crudp',
                    1 => 'crudl'
                ]
            ]
        ]
    ]
];
