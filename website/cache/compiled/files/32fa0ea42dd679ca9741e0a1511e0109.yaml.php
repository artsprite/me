<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/me/website/user/themes/delivernext/blueprints/theme/footer.yaml',
    'modified' => 1752983460,
    'size' => 5143,
    'data' => [
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'footer_columns' => [
                    'type' => 'columns',
                    'fields' => [
                        'footer_fields' => [
                            'type' => 'column',
                            'classes' => 'colum_admin',
                            'fields' => [
                                'about_section' => [
                                    'type' => 'section',
                                    'outerclasses' => 'admin_section',
                                    'heading_classes' => 'admin_options',
                                    'title' => 'DELIVERNEXT.ADMIN.THEME.FOOTER.ABOUT.TITLE',
                                    'fields' => [
                                        'footer.about.description' => [
                                            'type' => 'textarea',
                                            'rows' => 5,
                                            'markdown' => true,
                                            'label' => 'DELIVERNEXT.ADMIN.THEME.FOOTER.ABOUT.DESCRIPTION',
                                            'labelclasses' => 'bold'
                                        ]
                                    ]
                                ],
                                'quick_links' => [
                                    'type' => 'section',
                                    'outerclasses' => 'admin_section',
                                    'heading_classes' => 'admin_options',
                                    'title' => 'DELIVERNEXT.ADMIN.THEME.FOOTER.QUICK_LINKS.SECTION_TITLE',
                                    'fields' => [
                                        'footer.quick_links_label' => [
                                            'type' => 'text',
                                            'label' => 'DELIVERNEXT.ADMIN.THEME.FOOTER.QUICK_LINKS.LABEL',
                                            'labelclasses' => 'bold'
                                        ],
                                        'footer.quick_links_items' => [
                                            'label' => 'DELIVERNEXT.ADMIN.THEME.FOOTER.QUICK_LINKS.ITEMS.LABEL',
                                            'labelclasses' => 'bold',
                                            'type' => 'list',
                                            'style' => 'vertical',
                                            'collapsed' => true,
                                            'fields' => [
                                                '.text' => [
                                                    'type' => 'text',
                                                    'label' => 'DELIVERNEXT.ADMIN.THEME.FOOTER.QUICK_LINKS.ITEMS.TEXT',
                                                    'labelclasses' => 'bold-light',
                                                    'placeholder' => 'Grav CMS'
                                                ],
                                                '.url' => [
                                                    'type' => 'text',
                                                    'label' => 'DELIVERNEXT.ADMIN.THEME.FOOTER.QUICK_LINKS.ITEMS.URL',
                                                    'labelclasses' => 'bold-light',
                                                    'placeholder' => 'https://getgrav.org'
                                                ],
                                                '.target' => [
                                                    'type' => 'select',
                                                    'label' => 'DELIVERNEXT.ADMIN.THEME.FOOTER.QUICK_LINKS.ITEMS.TARGET.LABEL',
                                                    'labelclasses' => 'bold-light',
                                                    'default' => '_self',
                                                    'size' => 'medium',
                                                    'options' => [
                                                        '_self' => 'DELIVERNEXT.ADMIN.THEME.FOOTER.QUICK_LINKS.ITEMS.TARGET.SELF',
                                                        '_blank' => 'DELIVERNEXT.ADMIN.THEME.FOOTER.QUICK_LINKS.ITEMS.TARGET.BLANK'
                                                    ]
                                                ]
                                            ]
                                        ]
                                    ]
                                ],
                                'other_menu' => [
                                    'type' => 'section',
                                    'outerclasses' => 'admin_section',
                                    'heading_classes' => 'admin_options',
                                    'title' => 'DELIVERNEXT.ADMIN.THEME.FOOTER.OTHER_MENU.SECTION_TITLE',
                                    'fields' => [
                                        'footer.copyright_text' => [
                                            'type' => 'text',
                                            'label' => 'DELIVERNEXT.ADMIN.THEME.FOOTER.OTHER_MENU.COPYRIGHT_TEXT',
                                            'labelclasses' => 'bold'
                                        ],
                                        'footer.other_menu' => [
                                            'label' => 'DELIVERNEXT.ADMIN.THEME.FOOTER.OTHER_MENU.ITEMS.LABEL',
                                            'labelclasses' => 'bold',
                                            'type' => 'list',
                                            'style' => 'vertical',
                                            'max' => 5,
                                            'collapsed' => true,
                                            'fields' => [
                                                '.text' => [
                                                    'type' => 'text',
                                                    'label' => 'DELIVERNEXT.ADMIN.THEME.FOOTER.OTHER_MENU.ITEMS.TEXT',
                                                    'labelclasses' => 'bold-light'
                                                ],
                                                '.url' => [
                                                    'type' => 'text',
                                                    'label' => 'DELIVERNEXT.ADMIN.THEME.FOOTER.OTHER_MENU.ITEMS.URL',
                                                    'labelclasses' => 'bold-light'
                                                ],
                                                '.target' => [
                                                    'type' => 'select',
                                                    'label' => 'DELIVERNEXT.ADMIN.THEME.FOOTER.OTHER_MENU.ITEMS.TARGET.LABEL',
                                                    'labelclasses' => 'bold-light',
                                                    'default' => '_self',
                                                    'size' => 'medium',
                                                    'options' => [
                                                        '_self' => 'DELIVERNEXT.ADMIN.THEME.FOOTER.OTHER_MENU.ITEMS.TARGET.SELF',
                                                        '_blank' => 'DELIVERNEXT.ADMIN.THEME.FOOTER.OTHER_MENU.ITEMS.TARGET.BLANK'
                                                    ]
                                                ]
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'contact_fields' => [
                            'type' => 'column',
                            'classes' => 'colum_admin',
                            'fields' => [
                                'contact_section' => [
                                    'type' => 'section',
                                    'outerclasses' => 'admin_section',
                                    'heading_classes' => 'admin_options',
                                    'title' => 'DELIVERNEXT.ADMIN.THEME.FOOTER.CONTACT.SECTION_TITLE',
                                    'fields' => [
                                        'footer.contact_section_label' => [
                                            'type' => 'text',
                                            'labelclasses' => 'bold',
                                            'label' => 'DELIVERNEXT.ADMIN.THEME.FOOTER.CONTACT.LABEL'
                                        ],
                                        'footer.address' => [
                                            'type' => 'list',
                                            'label' => 'DELIVERNEXT.ADMIN.THEME.FOOTER.CONTACT.ADDRESS.LABEL',
                                            'labelclasses' => 'bold',
                                            'style' => 'vertical',
                                            'max' => 5,
                                            'fields' => [
                                                '.line' => [
                                                    'type' => 'text',
                                                    'label' => 'DELIVERNEXT.ADMIN.THEME.FOOTER.CONTACT.ADDRESS.LINE',
                                                    'labelclasses' => 'bold-light'
                                                ]
                                            ]
                                        ],
                                        'footer.gps' => [
                                            'label' => 'DELIVERNEXT.ADMIN.THEME.FOOTER.CONTACT.GPS.LABEL',
                                            'sublabel' => 'DELIVERNEXT.ADMIN.THEME.FOOTER.CONTACT.GPS.SUBLABEL',
                                            'labelclasses' => 'bold',
                                            'type' => 'text'
                                        ]
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
