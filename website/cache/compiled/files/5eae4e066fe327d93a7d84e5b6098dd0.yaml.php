<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/me/website/user/plugins/admin/blueprints.yaml',
    'modified' => 1730133084,
    'size' => 25885,
    'data' => [
        'name' => 'Admin Panel',
        'slug' => 'admin',
        'type' => 'plugin',
        'version' => '1.10.48',
        'description' => 'Adds an advanced administration panel to manage your site',
        'icon' => 'empire',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'https://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-admin',
        'keywords' => 'admin, plugin, manager, panel',
        'bugs' => 'https://github.com/getgrav/grav-plugin-admin/issues',
        'docs' => 'https://github.com/getgrav/grav-plugin-admin/blob/develop/README.md',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.7.42'
            ],
            1 => [
                'name' => 'form',
                'version' => '>=6.0.1'
            ],
            2 => [
                'name' => 'login',
                'version' => '>=3.7.8'
            ],
            3 => [
                'name' => 'email',
                'version' => '>=3.1.6'
            ],
            4 => [
                'name' => 'flex-objects',
                'version' => '>=1.2.0'
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'admin_tabs' => [
                    'type' => 'tabs',
                    'fields' => [
                        'config_tab' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_ADMIN.CONFIGURATION',
                            'fields' => [
                                'Basics' => [
                                    'type' => 'section',
                                    'title' => 'PLUGIN_ADMIN.BASICS',
                                    'underline' => false
                                ],
                                'enabled' => [
                                    'type' => 'hidden',
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
                                'cache_enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.ADMIN_CACHING',
                                    'help' => 'PLUGIN_ADMIN.ADMIN_CACHING_HELP',
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'twofa_enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_LOGIN.2FA_TITLE',
                                    'help' => 'PLUGIN_LOGIN.2FA_ENABLED_HELP',
                                    'default' => 1,
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'route' => [
                                    'type' => 'text',
                                    'label' => 'PLUGIN_ADMIN.ADMIN_PATH',
                                    'size' => 'medium',
                                    'placeholder' => 'ADMIN_PATH_PLACEHOLDER',
                                    'help' => 'ADMIN_PATH_HELP'
                                ],
                                'logo_text' => [
                                    'type' => 'text',
                                    'label' => 'PLUGIN_ADMIN.LOGO_TEXT',
                                    'size' => 'medium',
                                    'placeholder' => 'Grav',
                                    'help' => 'PLUGIN_ADMIN.LOGO_TEXT_HELP'
                                ],
                                'content_padding' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.CONTENT_PADDING',
                                    'help' => 'PLUGIN_ADMIN.CONTENT_PADDING_HELP',
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'body_classes' => [
                                    'type' => 'text',
                                    'label' => 'PLUGIN_ADMIN.BODY_CLASSES',
                                    'size' => 'medium',
                                    'help' => 'PLUGIN_ADMIN.BODY_CLASSES_HELP'
                                ],
                                'sidebar.activate' => [
                                    'type' => 'select',
                                    'label' => 'PLUGIN_ADMIN.SIDEBAR_ACTIVATION',
                                    'help' => 'PLUGIN_ADMIN.SIDEBAR_ACTIVATION_HELP',
                                    'size' => 'small',
                                    'default' => 'tab',
                                    'options' => [
                                        'tab' => 'PLUGIN_ADMIN.SIDEBAR_ACTIVATION_TAB',
                                        'hover' => 'PLUGIN_ADMIN.SIDEBAR_ACTIVATION_HOVER'
                                    ]
                                ],
                                'sidebar.hover_delay' => [
                                    'type' => 'text',
                                    'size' => 'x-small',
                                    'append' => 'PLUGIN_ADMIN.SIDEBAR_HOVER_DELAY_APPEND',
                                    'label' => 'PLUGIN_ADMIN.SIDEBAR_HOVER_DELAY',
                                    'default' => 500,
                                    'validate' => [
                                        'type' => 'number',
                                        'min' => 1
                                    ]
                                ],
                                'sidebar.size' => [
                                    'type' => 'select',
                                    'label' => 'PLUGIN_ADMIN.SIDEBAR_SIZE',
                                    'help' => 'PLUGIN_ADMIN.SIDEBAR_SIZE_HELP',
                                    'size' => 'medium',
                                    'default' => 'auto',
                                    'options' => [
                                        'auto' => 'PLUGIN_ADMIN.SIDEBAR_SIZE_AUTO',
                                        'small' => 'PLUGIN_ADMIN.SIDEBAR_SIZE_SMALL'
                                    ]
                                ],
                                'theme' => [
                                    'type' => 'hidden',
                                    'label' => 'PLUGIN_ADMIN.THEME',
                                    'default' => 'grav'
                                ],
                                'edit_mode' => [
                                    'type' => 'select',
                                    'label' => 'PLUGIN_ADMIN.EDIT_MODE',
                                    'size' => 'small',
                                    'default' => 'normal',
                                    'options' => [
                                        'normal' => 'PLUGIN_ADMIN.NORMAL',
                                        'expert' => 'PLUGIN_ADMIN.EXPERT'
                                    ],
                                    'help' => 'PLUGIN_ADMIN.EDIT_MODE_HELP'
                                ],
                                'frontend_preview_target' => [
                                    'type' => 'select',
                                    'label' => 'PLUGIN_ADMIN.FRONTEND_PREVIEW_TARGET',
                                    'size' => 'medium',
                                    'default' => 'inline',
                                    'options' => [
                                        'inline' => 'PLUGIN_ADMIN.FRONTEND_PREVIEW_TARGET_INLINE',
                                        '_blank' => 'PLUGIN_ADMIN.FRONTEND_PREVIEW_TARGET_NEW',
                                        '_self' => 'PLUGIN_ADMIN.FRONTEND_PREVIEW_TARGET_CURRENT'
                                    ]
                                ],
                                'pages.show_parents' => [
                                    'type' => 'select',
                                    'size' => 'medium',
                                    'label' => 'PLUGIN_ADMIN.PARENT_DROPDOWN',
                                    'highlight' => 1,
                                    'options' => [
                                        'both' => 'PLUGIN_ADMIN.PARENT_DROPDOWN_BOTH',
                                        'folder' => 'PLUGIN_ADMIN.PARENT_DROPDOWN_FOLDER',
                                        'fullpath' => 'PLUGIN_ADMIN.PARENT_DROPDOWN_FULLPATH'
                                    ]
                                ],
                                'pages.parents_levels' => [
                                    'type' => 'text',
                                    'label' => 'PLUGIN_ADMIN.PARENTS_LEVELS',
                                    'size' => 'small',
                                    'help' => 'PLUGIN_ADMIN.PARENTS_LEVELS_HELP'
                                ],
                                'pages.show_modular' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.MODULAR_PARENTS',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ],
                                    'help' => 'PLUGIN_ADMIN.MODULAR_PARENTS_HELP'
                                ],
                                'show_beta_msg' => [
                                    'type' => 'hidden'
                                ],
                                'show_github_msg' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.SHOW_GITHUB_LINK',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ],
                                    'help' => 'PLUGIN_ADMIN.SHOW_GITHUB_LINK_HELP'
                                ],
                                'enable_auto_updates_check' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.AUTO_UPDATES',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ],
                                    'help' => 'PLUGIN_ADMIN.AUTO_UPDATES_HELP'
                                ],
                                'session.timeout' => [
                                    'type' => 'text',
                                    'size' => 'small',
                                    'label' => 'PLUGIN_ADMIN.TIMEOUT',
                                    'append' => 'GRAV.NICETIME.SECOND_PLURAL',
                                    'help' => 'PLUGIN_ADMIN.TIMEOUT_HELP',
                                    'validate' => [
                                        'type' => 'number',
                                        'min' => 1
                                    ]
                                ],
                                'hide_page_types' => [
                                    'type' => 'select',
                                    'size' => 'large',
                                    'label' => 'PLUGIN_ADMIN.HIDE_PAGE_TYPES',
                                    'classes' => 'fancy',
                                    'multiple' => true,
                                    'array' => true,
                                    'selectize' => [
                                        'create' => true
                                    ],
                                    'data-options@' => [
                                        0 => '\\Grav\\Plugin\\AdminPlugin::pagesTypes',
                                        1 => true
                                    ]
                                ],
                                'hide_modular_page_types' => [
                                    'type' => 'select',
                                    'size' => 'large',
                                    'label' => 'PLUGIN_ADMIN.HIDE_MODULAR_PAGE_TYPES',
                                    'classes' => 'fancy',
                                    'multiple' => true,
                                    'array' => true,
                                    'selectize' => [
                                        'create' => true
                                    ],
                                    'data-options@' => [
                                        0 => '\\Grav\\Plugin\\AdminPlugin::pagesModularTypes',
                                        1 => true
                                    ]
                                ],
                                'Dashboard' => [
                                    'type' => 'section',
                                    'title' => 'PLUGIN_ADMIN.DASHBOARD',
                                    'underline' => true
                                ],
                                'widgets_display' => [
                                    'type' => 'widgets',
                                    'label' => 'PLUGIN_ADMIN.WIDGETS_DISPLAY',
                                    'validate' => [
                                        'type' => 'array'
                                    ]
                                ],
                                'Notifications' => [
                                    'type' => 'section',
                                    'title' => 'PLUGIN_ADMIN.NOTIFICATIONS',
                                    'underline' => true
                                ],
                                'notifications.feed' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.FEED_NOTIFICATIONS',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ],
                                    'help' => 'PLUGIN_ADMIN.FEED_NOTIFICATIONS_HELP'
                                ],
                                'notifications.dashboard' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.DASHBOARD_NOTIFICATIONS',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ],
                                    'help' => 'PLUGIN_ADMIN.DASHBOARD_NOTIFICATIONS_HELP'
                                ],
                                'notifications.plugins' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.PLUGINS_NOTIFICATIONS',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ],
                                    'help' => 'PLUGIN_ADMIN.PLUGINS_NOTIFICATIONS_HELP'
                                ],
                                'notifications.themes' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.THEMES_NOTIFICATIONS',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ],
                                    'help' => 'PLUGIN_ADMIN.THEMES_NOTIFICATIONS_HELP'
                                ]
                            ]
                        ],
                        'customization_tab' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_ADMIN.CUSTOMIZATION',
                            'fields' => [
                                'whitelabel.logos' => [
                                    'type' => 'section',
                                    'underline' => true,
                                    'title' => 'PLUGIN_ADMIN.LOGOS'
                                ],
                                'whitelabel.logo_login' => [
                                    'type' => 'file',
                                    'label' => 'PLUGIN_ADMIN.LOGIN_SCREEN_CUSTOM_LOGO_LABEL',
                                    'destination' => 'user://assets',
                                    'accept' => [
                                        0 => 'image/*'
                                    ]
                                ],
                                'whitelabel.logo_custom' => [
                                    'type' => 'file',
                                    'label' => 'PLUGIN_ADMIN.TOP_LEFT_CUSTOM_LOGO_LABEL',
                                    'destination' => 'user://assets',
                                    'accept' => [
                                        0 => 'image/*'
                                    ]
                                ],
                                'codemirror_section' => [
                                    'type' => 'section',
                                    'underline' => true,
                                    'title' => 'PLUGIN_ADMIN.CODEMIRROR'
                                ],
                                'whitelabel.codemirror_theme' => [
                                    'type' => 'select',
                                    'label' => 'PLUGIN_ADMIN.CODEMIRROR_THEME',
                                    'default' => 'paper',
                                    'markdown' => true,
                                    'data-options@' => '\\Grav\\Plugin\\AdminPlugin::themeOptions',
                                    'description' => 'PLUGIN_ADMIN.CODEMIRROR_THEME_DESC'
                                ],
                                'whitelabel.codemirror_fontsize' => [
                                    'type' => 'select',
                                    'label' => 'PLUGIN_ADMIN.CODEMIRROR_FONTSIZE',
                                    'default' => 'md',
                                    'options' => [
                                        'sm' => 'PLUGIN_ADMIN.CODEMIRROR_FONTSIZE_SM',
                                        'md' => 'PLUGIN_ADMIN.CODEMIRROR_FONTSIZE_MD',
                                        'lg' => 'PLUGIN_ADMIN.CODEMIRROR_FONTSIZE_LG'
                                    ]
                                ],
                                'whitelabel.codemirror_md_font' => [
                                    'type' => 'select',
                                    'label' => 'PLUGIN_ADMIN.CODEMIRROR_MD_FONT',
                                    'default' => 'sans',
                                    'options' => [
                                        'sans' => 'PLUGIN_ADMIN.CODEMIRROR_MD_FONT_SANS',
                                        'mono' => 'PLUGIN_ADMIN.CODEMIRROR_MD_FONT_MONO'
                                    ]
                                ],
                                'customization_section' => [
                                    'type' => 'section',
                                    'underline' => true,
                                    'title' => 'PLUGIN_ADMIN.CUSTOMIZATION'
                                ],
                                'whitelabel.quicktray_recompile' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.QUICKTRAY_RECOMPILE',
                                    'help' => 'PLUGIN_ADMIN.QUICKTRAY_RECOMPILE_HELP',
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
                                'whitelabel.color_scheme.name' => [
                                    'type' => 'text',
                                    'label' => 'PLUGIN_ADMIN.COLOR_SCHEME_NAME',
                                    'help' => 'PLUGIN_ADMIN.COLOR_SCHEME_NAME_HELP',
                                    'placeholder' => 'PLUGIN_ADMIN.COLOR_SCHEME_NAME_PLACEHOLDER'
                                ],
                                'themes-preview' => [
                                    'type' => 'themepreview',
                                    'ignore' => 'true;',
                                    'label' => 'PLUGIN_ADMIN.PRESETS',
                                    'style' => 'vertical'
                                ],
                                'colorschemes' => [
                                    'type' => 'colorscheme',
                                    'label' => 'PLUGIN_ADMIN.COLOR_SCHEME_LABEL',
                                    'style' => 'vertical',
                                    'help' => 'PLUGIN_ADMIN.COLOR_SCHEME_HELP',
                                    'fields' => [
                                        'whitelabel.color_scheme.colors.logo-bg' => [
                                            'type' => 'colorscheme.color',
                                            'default' => '#1e333e',
                                            'help' => 'PLUGIN_ADMIN.LOGO_BG_HELP'
                                        ],
                                        'whitelabel.color_scheme.colors.logo-link' => [
                                            'type' => 'colorscheme.color',
                                            'default' => '#ffffff',
                                            'help' => 'PLUGIN_ADMIN.LOGO_LINK_HELP'
                                        ],
                                        'whitelabel.color_scheme.colors.nav-bg' => [
                                            'type' => 'colorscheme.color',
                                            'default' => '#253a47',
                                            'help' => 'PLUGIN_ADMIN.NAV_BG_HELP'
                                        ],
                                        'whitelabel.color_scheme.colors.nav-text' => [
                                            'type' => 'colorscheme.color',
                                            'default' => '#afc7d5',
                                            'help' => 'PLUGIN_ADMIN.NAV_TEXT_HELP'
                                        ],
                                        'whitelabel.color_scheme.colors.nav-link' => [
                                            'type' => 'colorscheme.color',
                                            'default' => '#d1dee7',
                                            'help' => 'PLUGIN_ADMIN.NAV_LINK_HELP'
                                        ],
                                        'whitelabel.color_scheme.colors.nav-selected-bg' => [
                                            'type' => 'colorscheme.color',
                                            'default' => '#2d4d5b',
                                            'help' => 'PLUGIN_ADMIN.NAV_SELECTED_BG_HELP'
                                        ],
                                        'whitelabel.color_scheme.colors.nav-selected-link' => [
                                            'type' => 'colorscheme.color',
                                            'default' => '#ffffff',
                                            'help' => 'PLUGIN_ADMIN.NAV_SELECTED_LINK_HELP'
                                        ],
                                        'whitelabel.color_scheme.colors.nav-hover-bg' => [
                                            'type' => 'colorscheme.color',
                                            'default' => '#1e333e',
                                            'help' => 'PLUGIN_ADMIN.NAV_HOVER_BG_HELP'
                                        ],
                                        'whitelabel.color_scheme.colors.nav-hover-link' => [
                                            'type' => 'colorscheme.color',
                                            'default' => '#ffffff',
                                            'help' => 'PLUGIN_ADMIN.NAV_HOVER_LINK_HELP'
                                        ],
                                        'whitelabel.color_scheme.colors.toolbar-bg' => [
                                            'type' => 'colorscheme.color',
                                            'default' => '#349886',
                                            'help' => 'PLUGIN_ADMIN.TOOLBAR_BG_HELP'
                                        ],
                                        'whitelabel.color_scheme.colors.toolbar-text' => [
                                            'type' => 'colorscheme.color',
                                            'default' => '#ffffff',
                                            'help' => 'PLUGIN_ADMIN.TOOLBAR_TEXT_HELP'
                                        ],
                                        'whitelabel.color_scheme.colors.page-bg' => [
                                            'type' => 'colorscheme.color',
                                            'default' => '#314d5b',
                                            'help' => 'PLUGIN_ADMIN.PAGE_BG_HELP'
                                        ],
                                        'whitelabel.color_scheme.colors.page-text' => [
                                            'type' => 'colorscheme.color',
                                            'default' => '#81a5b5',
                                            'help' => 'PLUGIN_ADMIN.PAGE_TEXT_HELP'
                                        ],
                                        'whitelabel.color_scheme.colors.page-link' => [
                                            'type' => 'colorscheme.color',
                                            'default' => '#aad9ed',
                                            'help' => 'PLUGIN_ADMIN.PAGE_LINK_HELP'
                                        ],
                                        'whitelabel.color_scheme.colors.content-bg' => [
                                            'type' => 'colorscheme.color',
                                            'default' => '#eeeeee',
                                            'help' => 'PLUGIN_ADMIN.CONTENT_BG_HELP'
                                        ],
                                        'whitelabel.color_scheme.colors.content-text' => [
                                            'type' => 'colorscheme.color',
                                            'default' => '#737c81',
                                            'help' => 'PLUGIN_ADMIN.CONTENT_TEXT_HELP'
                                        ],
                                        'whitelabel.color_scheme.colors.content-link' => [
                                            'type' => 'colorscheme.color',
                                            'default' => '#0082ba',
                                            'help' => 'PLUGIN_ADMIN.CONTENT_LINK_HELP'
                                        ],
                                        'whitelabel.color_scheme.colors.content-link2' => [
                                            'type' => 'colorscheme.color',
                                            'default' => '#da4b46',
                                            'help' => 'PLUGIN_ADMIN.CONTENT_LINK2_HELP'
                                        ],
                                        'whitelabel.color_scheme.colors.content-header' => [
                                            'type' => 'colorscheme.color',
                                            'default' => '#314d5b',
                                            'help' => 'PLUGIN_ADMIN.CONTENT_HEADER_HELP'
                                        ],
                                        'whitelabel.color_scheme.colors.content-tabs-bg' => [
                                            'type' => 'colorscheme.color',
                                            'default' => '#223a47',
                                            'help' => 'PLUGIN_ADMIN.CONTENT_TABS_BG_HELP'
                                        ],
                                        'whitelabel.color_scheme.colors.content-tabs-text' => [
                                            'type' => 'colorscheme.color',
                                            'default' => '#d1dee7',
                                            'help' => 'PLUGIN_ADMIN.CONTENT_TABS_TEXT_HELP'
                                        ],
                                        'whitelabel.color_scheme.colors.content-highlight' => [
                                            'type' => 'colorscheme.color',
                                            'default' => '#ffffd7',
                                            'help' => 'PLUGIN_ADMIN.CONTENT_HIGHLIGHT_HELP'
                                        ],
                                        'whitelabel.color_scheme.colors.button-bg' => [
                                            'type' => 'colorscheme.color',
                                            'default' => '#41bea8',
                                            'help' => 'PLUGIN_ADMIN.BUTTON_BG_HELP'
                                        ],
                                        'whitelabel.color_scheme.colors.button-text' => [
                                            'type' => 'colorscheme.color',
                                            'default' => '#ffffff',
                                            'help' => 'PLUGIN_ADMIN.BUTTON_TEXT_HELP'
                                        ],
                                        'whitelabel.color_scheme.colors.notice-bg' => [
                                            'type' => 'colorscheme.color',
                                            'default' => '#00a6cf',
                                            'help' => 'PLUGIN_ADMIN.NOTICE_BG_HELP'
                                        ],
                                        'whitelabel.color_scheme.colors.notice-text' => [
                                            'type' => 'colorscheme.color',
                                            'default' => '#ffffff',
                                            'help' => 'PLUGIN_ADMIN.NOTICE_TEXT_HELP'
                                        ],
                                        'whitelabel.color_scheme.colors.update-bg' => [
                                            'type' => 'colorscheme.color',
                                            'default' => '#8f5aad',
                                            'help' => 'PLUGIN_ADMIN.UPDATES_BG_HELP'
                                        ],
                                        'whitelabel.color_scheme.colors.update-text' => [
                                            'type' => 'colorscheme.color',
                                            'default' => '#ffffff',
                                            'help' => 'PLUGIN_ADMIN.UPDATES_TEXT_HELP'
                                        ],
                                        'whitelabel.color_scheme.colors.critical-bg' => [
                                            'type' => 'colorscheme.color',
                                            'default' => '#da4b46',
                                            'help' => 'PLUGIN_ADMIN.CRITICAL_BG_HELP'
                                        ],
                                        'whitelabel.color_scheme.colors.critical-text' => [
                                            'type' => 'colorscheme.color',
                                            'default' => '#ffffff',
                                            'help' => 'PLUGIN_ADMIN.CRITICAL_TEXT_HELP'
                                        ]
                                    ]
                                ],
                                'whitelabel.color_scheme.accents.primary-accent' => [
                                    'type' => 'select',
                                    'size' => 'medium',
                                    'classes' => 'fancy',
                                    'label' => 'PLUGIN_ADMIN.PRIMARY_ACCENT_LABEL',
                                    'help' => 'PLUGIN_ADMIN.PRIMARY_ACCENT_HELP',
                                    'options' => [
                                        'button' => 'PLUGIN_ADMIN.BUTTON_COLORS',
                                        'content' => 'PLUGIN_ADMIN.CONTENT_COLORS',
                                        'tabs' => 'PLUGIN_ADMIN.TABS_COLORS',
                                        'critical' => 'PLUGIN_ADMIN.CRITICAL_COLORS',
                                        'logo' => 'PLUGIN_ADMIN.LOGO_COLORS',
                                        'nav' => 'PLUGIN_ADMIN.NAV_COLORS',
                                        'notice' => 'PLUGIN_ADMIN.NOTICE_COLORS',
                                        'page' => 'PLUGIN_ADMIN.PAGE_COLORS',
                                        'toolbar' => 'PLUGIN_ADMIN.TOOLBAR_COLORS',
                                        'update' => 'PLUGIN_ADMIN.UPDATE_COLORS'
                                    ]
                                ],
                                'whitelabel.color_scheme.accents.secondary-accent' => [
                                    'type' => 'select',
                                    'size' => 'medium',
                                    'classes' => 'fancy',
                                    'label' => 'PLUGIN_ADMIN.SECONDARY_ACCENT_LABEL',
                                    'help' => 'PLUGIN_ADMIN.SECONDARY_ACCENT_HELP',
                                    'options' => [
                                        'button' => 'PLUGIN_ADMIN.BUTTON_COLORS',
                                        'content' => 'PLUGIN_ADMIN.CONTENT_COLORS',
                                        'tabs' => 'PLUGIN_ADMIN.TABS_COLORS',
                                        'critical' => 'PLUGIN_ADMIN.CRITICAL_COLORS',
                                        'logo' => 'PLUGIN_ADMIN.LOGO_COLORS',
                                        'nav' => 'PLUGIN_ADMIN.NAV_COLORS',
                                        'notice' => 'PLUGIN_ADMIN.NOTICE_COLORS',
                                        'page' => 'PLUGIN_ADMIN.PAGE_COLORS',
                                        'toolbar' => 'PLUGIN_ADMIN.TOOLBAR_COLORS',
                                        'update' => 'PLUGIN_ADMIN.UPDATE_COLORS'
                                    ]
                                ],
                                'whitelabel.color_scheme.accents.tertiary-accent' => [
                                    'type' => 'select',
                                    'size' => 'medium',
                                    'classes' => 'fancy',
                                    'label' => 'PLUGIN_ADMIN.TERTIARY_ACCENT_LABEL',
                                    'help' => 'PLUGIN_ADMIN.TERTIARY_ACCENT_HELP',
                                    'options' => [
                                        'button' => 'PLUGIN_ADMIN.BUTTON_COLORS',
                                        'content' => 'PLUGIN_ADMIN.CONTENT_COLORS',
                                        'tabs' => 'PLUGIN_ADMIN.TABS_COLORS',
                                        'critical' => 'PLUGIN_ADMIN.CRITICAL_COLORS',
                                        'logo' => 'PLUGIN_ADMIN.LOGO_COLORS',
                                        'nav' => 'PLUGIN_ADMIN.NAV_COLORS',
                                        'notice' => 'PLUGIN_ADMIN.NOTICE_COLORS',
                                        'page' => 'PLUGIN_ADMIN.PAGE_COLORS',
                                        'toolbar' => 'PLUGIN_ADMIN.TOOLBAR_COLORS',
                                        'update' => 'PLUGIN_ADMIN.UPDATE_COLORS'
                                    ]
                                ],
                                'whitelabel.custom_footer' => [
                                    'type' => 'textarea',
                                    'rows' => 2,
                                    'label' => 'PLUGIN_ADMIN.CUSTOM_FOOTER',
                                    'help' => 'PLUGIN_ADMIN.CUSTOM_FOOTER_HELP',
                                    'placeholder' => 'PLUGIN_ADMIN.CUSTOM_FOOTER_PLACEHOLDER'
                                ],
                                'whitelabel.custom_css' => [
                                    'label' => 'PLUGIN_ADMIN.CUSTOM_CSS_LABEL',
                                    'placeholder' => 'PLUGIN_ADMIN.CUSTOM_CSS_PLACEHOLDER',
                                    'help' => 'PLUGIN_ADMIN.CUSTOM_CSS_HELP',
                                    'type' => 'editor',
                                    'codemirror' => [
                                        'mode' => 'css',
                                        'indentUnit' => 2,
                                        'autofocus' => true,
                                        'indentWithTabs' => true,
                                        'lineNumbers' => true,
                                        'styleActiveLine' => true
                                    ]
                                ],
                                'whitelabel.custom_presets' => [
                                    'label' => 'PLUGIN_ADMIN.CUSTOM_PRESETS',
                                    'help' => 'PLUGIN_ADMIN.CUSTOM_PRESETS_HELP',
                                    'placeholder' => 'PLUGIN_ADMIN.CUSTOM_PRESETS_PLACEHOLDER',
                                    'type' => 'editor',
                                    'codemirror' => [
                                        'mode' => 'yaml',
                                        'indentUnit' => 2,
                                        'autofocus' => true,
                                        'indentWithTabs' => false,
                                        'lineNumbers' => true,
                                        'styleActiveLine' => true,
                                        'gutters' => [
                                            0 => 'CodeMirror-lint-markers'
                                        ],
                                        'lint' => true
                                    ]
                                ]
                            ]
                        ],
                        'extras_tab' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_ADMIN.EXTRAS',
                            'fields' => [
                                'Popularity' => [
                                    'type' => 'section',
                                    'title' => 'PLUGIN_ADMIN.POPULARITY',
                                    'underline' => true
                                ],
                                'popularity.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.VISITOR_TRACKING',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ],
                                    'help' => 'PLUGIN_ADMIN.VISITOR_TRACKING_HELP'
                                ],
                                'dashboard.days_of_stats' => [
                                    'type' => 'text',
                                    'label' => 'PLUGIN_ADMIN.DAYS_OF_STATS',
                                    'append' => 'days',
                                    'size' => 'x-small',
                                    'default' => 7,
                                    'help' => 'PLUGIN_ADMIN.DAYS_OF_STATS_HELP',
                                    'validate' => [
                                        'type' => 'int'
                                    ]
                                ],
                                'popularity.ignore' => [
                                    'type' => 'array',
                                    'label' => 'PLUGIN_ADMIN.IGNORE_URLS',
                                    'size' => 'large',
                                    'help' => 'PLUGIN_ADMIN.IGNORE_URLS_HELP',
                                    'default' => [
                                        0 => '/test*',
                                        1 => '/modular'
                                    ],
                                    'value_only' => true,
                                    'placeholder_value' => '/ignore-this-route'
                                ],
                                'popularity.history.daily' => [
                                    'type' => 'hidden',
                                    'label' => 'PLUGIN_ADMIN.DAILY_HISTORY',
                                    'default' => 30
                                ],
                                'popularity.history.monthly' => [
                                    'type' => 'hidden',
                                    'label' => 'PLUGIN_ADMIN.MONTHLY_HISTORY',
                                    'default' => 12
                                ],
                                'popularity.history.visitors' => [
                                    'type' => 'hidden',
                                    'label' => 'PLUGIN_ADMIN.VISITORS_HISTORY',
                                    'default' => 20
                                ],
                                'MediaResize' => [
                                    'type' => 'section',
                                    'title' => 'PLUGIN_ADMIN.MEDIA_RESIZE',
                                    'underline' => true
                                ],
                                'MediaResizeNote' => [
                                    'type' => 'spacer',
                                    'text' => 'PLUGIN_ADMIN.PAGEMEDIA_RESIZER',
                                    'markdown' => true
                                ],
                                'pagemedia.resize_width' => [
                                    'type' => 'number',
                                    'size' => 'x-small',
                                    'append' => 'PLUGIN_ADMIN.PIXELS',
                                    'label' => 'PLUGIN_ADMIN.RESIZE_WIDTH',
                                    'default' => 0,
                                    'validate' => [
                                        'type' => 'number'
                                    ],
                                    'help' => 'PLUGIN_ADMIN.RESIZE_WIDTH_HELP'
                                ],
                                'pagemedia.resize_height' => [
                                    'type' => 'number',
                                    'size' => 'x-small',
                                    'append' => 'PLUGIN_ADMIN.PIXELS',
                                    'label' => 'PLUGIN_ADMIN.RESIZE_HEIGHT',
                                    'default' => 0,
                                    'validate' => [
                                        'type' => 'number'
                                    ],
                                    'help' => 'PLUGIN_ADMIN.RESIZE_HEIGHT_HELP'
                                ],
                                'pagemedia.res_min_width' => [
                                    'type' => 'number',
                                    'size' => 'x-small',
                                    'append' => 'PLUGIN_ADMIN.PIXELS',
                                    'label' => 'PLUGIN_ADMIN.RES_MIN_WIDTH',
                                    'default' => 0,
                                    'validate' => [
                                        'type' => 'number'
                                    ],
                                    'help' => 'PLUGIN_ADMIN.RES_MIN_WIDTH_HELP'
                                ],
                                'pagemedia.res_min_height' => [
                                    'type' => 'number',
                                    'size' => 'x-small',
                                    'append' => 'PLUGIN_ADMIN.PIXELS',
                                    'label' => 'PLUGIN_ADMIN.RES_MIN_HEIGHT',
                                    'default' => 0,
                                    'validate' => [
                                        'type' => 'number'
                                    ],
                                    'help' => 'PLUGIN_ADMIN.RES_MIN_HEIGHT_HELP'
                                ],
                                'pagemedia.res_max_width' => [
                                    'type' => 'number',
                                    'size' => 'x-small',
                                    'append' => 'PLUGIN_ADMIN.PIXELS',
                                    'label' => 'PLUGIN_ADMIN.RES_MAX_WIDTH',
                                    'default' => 0,
                                    'validate' => [
                                        'type' => 'number'
                                    ],
                                    'help' => 'PLUGIN_ADMIN.RES_MAX_WIDTH_HELP'
                                ],
                                'pagemedia.res_max_height' => [
                                    'type' => 'number',
                                    'size' => 'x-small',
                                    'append' => 'PLUGIN_ADMIN.PIXELS',
                                    'label' => 'PLUGIN_ADMIN.RES_MAX_HEIGHT',
                                    'default' => 0,
                                    'validate' => [
                                        'type' => 'number'
                                    ],
                                    'help' => 'PLUGIN_ADMIN.RES_MAX_HEIGHT_HELP'
                                ],
                                'pagemedia.resize_quality' => [
                                    'type' => 'number',
                                    'size' => 'x-small',
                                    'append' => '0...1',
                                    'label' => 'PLUGIN_ADMIN.RESIZE_QUALITY',
                                    'default' => 0.8,
                                    'validate' => [
                                        'type' => 'number',
                                        'step' => 0.01
                                    ],
                                    'help' => 'PLUGIN_ADMIN.RESIZE_QUALITY_HELP'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
