<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/me/website/user/plugins/problems/blueprints.yaml',
    'modified' => 1742576858,
    'size' => 1006,
    'data' => [
        'name' => 'Problems',
        'slug' => 'problems',
        'type' => 'plugin',
        'version' => '2.2.2',
        'description' => 'Detects and reports problems found in the site.',
        'icon' => 'exclamation-circle',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'https://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-problems',
        'keywords' => 'problems, plugin, detector, assistant, required',
        'bugs' => 'https://github.com/getgrav/grav-plugin-problems/issues',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.7.11'
            ]
        ],
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
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
                'built_in_css' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_PROBLEMS.BUILTIN_CSS',
                    'help' => 'PLUGIN_PROBLEMS.BUILTIN_CSS_HELP',
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
        ]
    ]
];
