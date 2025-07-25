<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/me/website/user/themes/delivernext/blueprints/theme/header.yaml',
    'modified' => 1752983460,
    'size' => 2068,
    'data' => [
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'custommenus_section' => [
                    'type' => 'section',
                    'outerclasses' => 'admin_section',
                    'heading_classes' => 'admin_options',
                    'title' => 'DELIVERNEXT.ADMIN.THEME.HEADER.CUSTOM_MENU.SECTION_TITLE',
                    'fields' => [
                        'custommenus.enabled' => [
                            'type' => 'toggle',
                            'label' => 'DELIVERNEXT.ADMIN.THEME.HEADER.CUSTOM_MENU.ENABLE',
                            'help' => 'DELIVERNEXT.ADMIN.THEME.HEADER.CUSTOM_MENU.ENABLE_HELP',
                            'labelclasses' => 'bold',
                            'default' => 1,
                            'highlight' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.ENABLED',
                                0 => 'PLUGIN_ADMIN.DISABLED'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'custommenu' => [
                            'name' => 'menu',
                            'type' => 'list',
                            'label' => 'DELIVERNEXT.ADMIN.THEME.HEADER.CUSTOM_MENU.ITEMS.LABEL',
                            'labelclasses' => 'bold',
                            'collapsed' => true,
                            'collapsible' => true,
                            'fields' => [
                                '.text' => [
                                    'type' => 'text',
                                    'label' => 'DELIVERNEXT.ADMIN.THEME.HEADER.CUSTOM_MENU.ITEMS.TEXT',
                                    'description' => 'DELIVERNEXT.ADMIN.THEME.HEADER.CUSTOM_MENU.ITEMS.TEXT_DESCRIPTION',
                                    'labelclasses' => 'bold-light'
                                ],
                                '.icon' => [
                                    'type' => 'text',
                                    'label' => 'DELIVERNEXT.ADMIN.THEME.HEADER.CUSTOM_MENU.ITEMS.ICON',
                                    'description' => 'DELIVERNEXT.ADMIN.THEME.HEADER.CUSTOM_MENU.ITEMS.ICON_DESCRIPTION',
                                    'labelclasses' => 'bold-light'
                                ],
                                '.url' => [
                                    'type' => 'text',
                                    'label' => 'DELIVERNEXT.ADMIN.THEME.HEADER.CUSTOM_MENU.ITEMS.URL',
                                    'description' => 'DELIVERNEXT.ADMIN.THEME.HEADER.CUSTOM_MENU.ITEMS.URL_DESCRIPTION',
                                    'labelclasses' => 'bold-light'
                                ],
                                '.target' => [
                                    'type' => 'select',
                                    'label' => 'DELIVERNEXT.ADMIN.THEME.HEADER.CUSTOM_MENU.ITEMS.TARGET.LABEL',
                                    'labelclasses' => 'bold-light',
                                    'default' => '_self',
                                    'size' => 'medium',
                                    'options' => [
                                        '_self' => 'DELIVERNEXT.ADMIN.THEME.HEADER.CUSTOM_MENU.ITEMS.TARGET.SELF',
                                        '_blank' => 'DELIVERNEXT.ADMIN.THEME.HEADER.CUSTOM_MENU.ITEMS.TARGET.BLANK'
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
