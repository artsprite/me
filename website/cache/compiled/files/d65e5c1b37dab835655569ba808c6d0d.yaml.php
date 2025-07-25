<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/me/website/user/themes/delivernext/blueprints/theme/media.yaml',
    'modified' => 1752983460,
    'size' => 1836,
    'data' => [
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'social_options' => [
                    'type' => 'section',
                    'title' => 'DELIVERNEXT.ADMIN.THEME.MEDIA.SECTION_TITLE',
                    'text' => 'DELIVERNEXT.ADMIN.THEME.MEDIA.SECTION_TEXT',
                    'section_text_classes' => 'bold-light',
                    'outerclasses' => 'admin_section',
                    'heading_classes' => 'admin_options',
                    'fields' => [
                        'social_enabled' => [
                            'type' => 'toggle',
                            'label' => 'DELIVERNEXT.ADMIN.THEME.MEDIA.ENABLED',
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
                        'social' => [
                            'label' => 'DELIVERNEXT.ADMIN.THEME.MEDIA.ICONS.LABEL',
                            'type' => 'list',
                            'style' => 'vertical',
                            'collapsed' => true,
                            'collapsible' => true,
                            'labelclasses' => 'bold',
                            'max' => 6,
                            'fields' => [
                                '.name' => [
                                    'type' => 'text',
                                    'size' => 'medium',
                                    'label' => 'DELIVERNEXT.ADMIN.THEME.MEDIA.ICONS.ITEMS.NAME',
                                    'labelclasses' => 'bold-light'
                                ],
                                '.url' => [
                                    'type' => 'text',
                                    'size' => 'medium',
                                    'label' => 'DELIVERNEXT.ADMIN.THEME.MEDIA.ICONS.ITEMS.URL',
                                    'labelclasses' => 'bold-light'
                                ],
                                '.target' => [
                                    'type' => 'select',
                                    'label' => 'DELIVERNEXT.ADMIN.THEME.MEDIA.ICONS.ITEMS.TARGET.LABEL',
                                    'labelclasses' => 'bold-light',
                                    'default' => '_self',
                                    'size' => 'medium',
                                    'options' => [
                                        '_self' => 'DELIVERNEXT.ADMIN.THEME.MEDIA.ICONS.ITEMS.TARGET.SELF',
                                        '_blank' => 'DELIVERNEXT.ADMIN.THEME.MEDIA.ICONS.ITEMS.TARGET.BLANK'
                                    ]
                                ],
                                '.icon' => [
                                    'type' => 'iconpicker',
                                    'size' => 'medium',
                                    'label' => 'DELIVERNEXT.ADMIN.THEME.MEDIA.ICONS.ITEMS.ICON',
                                    'labelclasses' => 'bold-light'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
