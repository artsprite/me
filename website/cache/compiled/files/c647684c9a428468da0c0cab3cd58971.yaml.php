<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/me/website/user/plugins/mautic/blueprints.yaml',
    'modified' => 1651738354,
    'size' => 1266,
    'data' => [
        'name' => 'Mautic',
        'version' => '1.5.2',
        'description' => 'Mautic - Grav plugin integrates [Mautic](https://mautic.org) tracking, forms, dynamic web content, focus items, and assets into Grav CMS.',
        'icon' => 'pie-chart',
        'author' => [
            'name' => 'Mautic Community',
            'email' => 'extensions@mautic.org',
            'url' => 'https://mautic.org'
        ],
        'homepage' => 'https://github.com/mautic/mautic-grav',
        'keywords' => 'mautic, plugin, tracking, marketing',
        'bugs' => 'https://github.com/escopecz/mautic-grav/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin Status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'tracking' => [
                    'type' => 'toggle',
                    'label' => 'Enable tracking',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'If enabled, tracking code is injected in every page on load; If disabled, no tracking code is injected, which is useful if you want to control tracking from within a consent manager (to conform to the GDPR)
'
                ],
                'url' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'label' => 'Mautic base URL',
                    'placeholder' => 'http://...',
                    'help' => 'The base URL where your Mautic instance runs'
                ]
            ]
        ]
    ]
];
