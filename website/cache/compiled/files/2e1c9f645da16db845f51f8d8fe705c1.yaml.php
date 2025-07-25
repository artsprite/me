<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/me/website/system/blueprints/user/group.yaml',
    'modified' => 1730133084,
    'size' => 992,
    'data' => [
        'title' => 'Group',
        'rules' => [
            'slug' => [
                'pattern' => '[a-zA-Zа-яA-Я0-9_\\-]+',
                'min' => 1,
                'max' => 200
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'groupname' => [
                    'type' => 'text',
                    'size' => 'large',
                    'label' => 'PLUGIN_ADMIN.GROUP_NAME',
                    'flex-disabled@' => 'exists',
                    'flex-readonly@' => 'exists',
                    'validate' => [
                        'required' => true,
                        'rule' => 'slug'
                    ]
                ],
                'readableName' => [
                    'type' => 'text',
                    'size' => 'large',
                    'label' => 'PLUGIN_ADMIN.DISPLAY_NAME'
                ],
                'description' => [
                    'type' => 'text',
                    'size' => 'large',
                    'label' => 'PLUGIN_ADMIN.DESCRIPTION'
                ],
                'icon' => [
                    'type' => 'text',
                    'size' => 'small',
                    'label' => 'PLUGIN_ADMIN.ICON'
                ],
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.ENABLED',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.YES',
                        0 => 'PLUGIN_ADMIN.NO'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'access' => [
                    'type' => 'permissions',
                    'check_authorize' => false,
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
];
