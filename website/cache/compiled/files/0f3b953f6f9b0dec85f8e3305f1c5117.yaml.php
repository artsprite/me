<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/me/website/system/blueprints/config/system.yaml',
    'modified' => 1730133084,
    'size' => 58532,
    'data' => [
        'title' => 'PLUGIN_ADMIN.SYSTEM',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'system_tabs' => [
                    'type' => 'tabs',
                    'classes' => 'side-tabs',
                    'fields' => [
                        'content' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_ADMIN.CONTENT',
                            'fields' => [
                                'content_section' => [
                                    'type' => 'section',
                                    'title' => 'PLUGIN_ADMIN.CONTENT',
                                    'underline' => true
                                ],
                                'home.alias' => [
                                    'type' => 'pages',
                                    'size' => 'large',
                                    'classes' => 'fancy',
                                    'label' => 'PLUGIN_ADMIN.HOME_PAGE',
                                    'show_all' => false,
                                    'show_modular' => false,
                                    'show_root' => false,
                                    'show_slug' => true,
                                    'help' => 'PLUGIN_ADMIN.HOME_PAGE_HELP'
                                ],
                                'home.hide_in_urls' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.HIDE_HOME_IN_URLS',
                                    'help' => 'PLUGIN_ADMIN.HIDE_HOME_IN_URLS_HELP',
                                    'highlight' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'pages.theme' => [
                                    'type' => 'themeselect',
                                    'classes' => 'fancy',
                                    'selectize' => true,
                                    'size' => 'medium',
                                    'label' => 'PLUGIN_ADMIN.DEFAULT_THEME',
                                    'help' => 'PLUGIN_ADMIN.DEFAULT_THEME_HELP'
                                ],
                                'pages.process' => [
                                    'type' => 'checkboxes',
                                    'label' => 'PLUGIN_ADMIN.PROCESS',
                                    'help' => 'PLUGIN_ADMIN.PROCESS_HELP',
                                    'default' => [
                                        0 => [
                                            'markdown' => true
                                        ],
                                        1 => [
                                            'twig' => true
                                        ]
                                    ],
                                    'options' => [
                                        'markdown' => 'Markdown',
                                        'twig' => 'Twig'
                                    ],
                                    'use' => 'keys'
                                ],
                                'pages.types' => [
                                    'type' => 'array',
                                    'label' => 'PLUGIN_ADMIN.PAGE_TYPES',
                                    'help' => 'PLUGIN_ADMIN.PAGE_TYPES_HELP',
                                    'size' => 'small',
                                    'default' => [
                                        0 => 'html',
                                        1 => 'htm',
                                        2 => 'json',
                                        3 => 'xml',
                                        4 => 'txt',
                                        5 => 'rss',
                                        6 => 'atom'
                                    ],
                                    'value_only' => true
                                ],
                                'timezone' => [
                                    'type' => 'select',
                                    'label' => 'PLUGIN_ADMIN.TIMEZONE',
                                    'size' => 'medium',
                                    'classes' => 'fancy',
                                    'help' => 'PLUGIN_ADMIN.TIMEZONE_HELP',
                                    'data-options@' => '\\Grav\\Common\\Utils::timezones',
                                    'default' => '',
                                    'options' => [
                                        '' => 'Default (Server Timezone)'
                                    ]
                                ],
                                'pages.dateformat.default' => [
                                    'type' => 'select',
                                    'size' => 'medium',
                                    'selectize' => [
                                        'create' => true
                                    ],
                                    'label' => 'PLUGIN_ADMIN.DEFAULT_DATE_FORMAT',
                                    'help' => 'PLUGIN_ADMIN.DEFAULT_DATE_FORMAT_HELP',
                                    'placeholder' => 'PLUGIN_ADMIN.DEFAULT_DATE_FORMAT_PLACEHOLDER',
                                    'data-options@' => '\\Grav\\Common\\Utils::dateFormats',
                                    'validate' => [
                                        'type' => 'string'
                                    ]
                                ],
                                'pages.dateformat.short' => [
                                    'type' => 'dateformat',
                                    'size' => 'medium',
                                    'classes' => 'fancy',
                                    'label' => 'PLUGIN_ADMIN.SHORT_DATE_FORMAT',
                                    'help' => 'PLUGIN_ADMIN.SHORT_DATE_FORMAT_HELP',
                                    'default' => 'jS M Y',
                                    'options' => [
                                        'F jS \\a\\t g:ia' => 'Date1',
                                        'l jS \\of F g:i A' => 'Date2',
                                        'D, d M Y G:i:s' => 'Date3',
                                        'd-m-y G:i' => 'Date4',
                                        'jS M Y' => 'Date5',
                                        'Y-m-d G:i' => 'Date6'
                                    ]
                                ],
                                'pages.dateformat.long' => [
                                    'type' => 'dateformat',
                                    'size' => 'medium',
                                    'classes' => 'fancy',
                                    'label' => 'PLUGIN_ADMIN.LONG_DATE_FORMAT',
                                    'help' => 'PLUGIN_ADMIN.LONG_DATE_FORMAT_HELP',
                                    'options' => [
                                        'F jS \\a\\t g:ia' => 'Date1',
                                        'l jS \\of F g:i A' => 'Date2',
                                        'D, d M Y G:i:s' => 'Date3',
                                        'd-m-y G:i' => 'Date4',
                                        'jS M Y' => 'Date5',
                                        'Y-m-d G:i:s' => 'Date6'
                                    ]
                                ],
                                'pages.order.by' => [
                                    'type' => 'select',
                                    'size' => 'large',
                                    'classes' => 'fancy',
                                    'label' => 'PLUGIN_ADMIN.DEFAULT_ORDERING',
                                    'help' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_HELP',
                                    'options' => [
                                        'default' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_DEFAULT',
                                        'folder' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_FOLDER',
                                        'title' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_TITLE',
                                        'date' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_DATE'
                                    ]
                                ],
                                'pages.order.dir' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.DEFAULT_ORDER_DIRECTION',
                                    'highlight' => 'asc',
                                    'default' => 'desc',
                                    'help' => 'PLUGIN_ADMIN.DEFAULT_ORDER_DIRECTION_HELP',
                                    'options' => [
                                        'asc' => 'PLUGIN_ADMIN.ASCENDING',
                                        'desc' => 'PLUGIN_ADMIN.DESCENDING'
                                    ]
                                ],
                                'pages.list.count' => [
                                    'type' => 'text',
                                    'size' => 'x-small',
                                    'append' => 'PLUGIN_ADMIN.PAGES',
                                    'label' => 'PLUGIN_ADMIN.DEFAULT_PAGE_COUNT',
                                    'help' => 'PLUGIN_ADMIN.DEFAULT_PAGE_COUNT_HELP',
                                    'validate' => [
                                        'type' => 'number',
                                        'min' => 1
                                    ]
                                ],
                                'pages.publish_dates' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.DATE_BASED_PUBLISHING',
                                    'help' => 'PLUGIN_ADMIN.DATE_BASED_PUBLISHING_HELP',
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'pages.events' => [
                                    'type' => 'checkboxes',
                                    'label' => 'PLUGIN_ADMIN.EVENTS',
                                    'help' => 'PLUGIN_ADMIN.EVENTS_HELP',
                                    'default' => [
                                        0 => [
                                            'page' => true
                                        ],
                                        1 => [
                                            'twig' => true
                                        ]
                                    ],
                                    'options' => [
                                        'page' => 'Page Events',
                                        'twig' => 'Twig Events'
                                    ],
                                    'use' => 'keys'
                                ],
                                'pages.append_url_extension' => [
                                    'type' => 'text',
                                    'size' => 'x-small',
                                    'placeholder' => 'e.g. .html',
                                    'label' => 'PLUGIN_ADMIN.APPEND_URL_EXT',
                                    'help' => 'PLUGIN_ADMIN.APPEND_URL_EXT_HELP'
                                ],
                                'pages.redirect_default_code' => [
                                    'type' => 'select',
                                    'size' => 'medium',
                                    'classes' => 'fancy',
                                    'label' => 'PLUGIN_ADMIN.REDIRECT_DEFAULT_CODE',
                                    'help' => 'PLUGIN_ADMIN.REDIRECT_DEFAULT_CODE_HELP',
                                    'default' => 302,
                                    'options' => [
                                        301 => 'PLUGIN_ADMIN.REDIRECT_OPTION_301',
                                        302 => 'PLUGIN_ADMIN.REDIRECT_OPTION_302',
                                        303 => 'PLUGIN_ADMIN.REDIRECT_OPTION_303'
                                    ]
                                ],
                                'pages.redirect_default_route' => [
                                    'type' => 'select',
                                    'size' => 'medium',
                                    'classes' => 'fancy',
                                    'label' => 'PLUGIN_ADMIN.REDIRECT_DEFAULT_ROUTE',
                                    'help' => 'PLUGIN_ADMIN.REDIRECT_DEFAULT_ROUTE_HELP',
                                    'default' => 0,
                                    'options' => [
                                        0 => 'PLUGIN_ADMIN.REDIRECT_OPTION_NO_REDIRECT',
                                        1 => 'PLUGIN_ADMIN.REDIRECT_OPTION_DEFAULT_REDIRECT',
                                        301 => 'PLUGIN_ADMIN.REDIRECT_OPTION_301',
                                        302 => 'PLUGIN_ADMIN.REDIRECT_OPTION_302'
                                    ],
                                    'validate' => [
                                        'type' => 'int'
                                    ]
                                ],
                                'pages.redirect_trailing_slash' => [
                                    'type' => 'select',
                                    'size' => 'medium',
                                    'classes' => 'fancy',
                                    'label' => 'PLUGIN_ADMIN.REDIRECT_TRAILING_SLASH',
                                    'help' => 'PLUGIN_ADMIN.REDIRECT_TRAILING_SLASH_HELP',
                                    'default' => 1,
                                    'options' => [
                                        0 => 'PLUGIN_ADMIN.REDIRECT_OPTION_NO_REDIRECT',
                                        1 => 'PLUGIN_ADMIN.REDIRECT_OPTION_DEFAULT_REDIRECT',
                                        301 => 'PLUGIN_ADMIN.REDIRECT_OPTION_301',
                                        302 => 'PLUGIN_ADMIN.REDIRECT_OPTION_302'
                                    ],
                                    'validate' => [
                                        'type' => 'int'
                                    ]
                                ],
                                'pages.ignore_hidden' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.IGNORE_HIDDEN',
                                    'help' => 'PLUGIN_ADMIN.IGNORE_HIDDEN_HELP',
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'pages.ignore_files' => [
                                    'type' => 'selectize',
                                    'size' => 'large',
                                    'label' => 'PLUGIN_ADMIN.IGNORE_FILES',
                                    'help' => 'PLUGIN_ADMIN.IGNORE_FILES_HELP',
                                    'classes' => 'fancy',
                                    'validate' => [
                                        'type' => 'commalist'
                                    ]
                                ],
                                'pages.ignore_folders' => [
                                    'type' => 'selectize',
                                    'size' => 'large',
                                    'label' => 'PLUGIN_ADMIN.IGNORE_FOLDERS',
                                    'help' => 'PLUGIN_ADMIN.IGNORE_FOLDERS_HELP',
                                    'classes' => 'fancy',
                                    'validate' => [
                                        'type' => 'commalist'
                                    ]
                                ],
                                'pages.hide_empty_folders' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.HIDE_EMPTY_FOLDERS',
                                    'help' => 'PLUGIN_ADMIN.HIDE_EMPTY_FOLDERS_HELP',
                                    'highlight' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'pages.url_taxonomy_filters' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.ALLOW_URL_TAXONOMY_FILTERS',
                                    'help' => 'PLUGIN_ADMIN.ALLOW_URL_TAXONOMY_FILTERS_HELP',
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'pages.twig_first' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.TWIG_FIRST',
                                    'help' => 'PLUGIN_ADMIN.TWIG_FIRST_HELP',
                                    'highlight' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'pages.never_cache_twig' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.NEVER_CACHE_TWIG',
                                    'help' => 'PLUGIN_ADMIN.NEVER_CACHE_TWIG_HELP',
                                    'highlight' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'pages.frontmatter.process_twig' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.FRONTMATTER_PROCESS_TWIG',
                                    'help' => 'PLUGIN_ADMIN.FRONTMATTER_PROCESS_TWIG_HELP',
                                    'highlight' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'pages.frontmatter.ignore_fields' => [
                                    'type' => 'selectize',
                                    'size' => 'large',
                                    'placeholder' => 'e.g. forms',
                                    'label' => 'PLUGIN_ADMIN.FRONTMATTER_IGNORE_FIELDS',
                                    'help' => 'PLUGIN_ADMIN.FRONTMATTER_IGNORE_FIELDS_HELP',
                                    'classes' => 'fancy',
                                    'validate' => [
                                        'type' => 'commalist'
                                    ]
                                ]
                            ]
                        ],
                        'languages' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_ADMIN.LANGUAGES',
                            'fields' => [
                                'languages-section' => [
                                    'type' => 'section',
                                    'title' => 'PLUGIN_ADMIN.LANGUAGES',
                                    'underline' => true
                                ],
                                'languages.supported' => [
                                    'type' => 'selectize',
                                    'size' => 'large',
                                    'placeholder' => 'e.g. en, fr',
                                    'label' => 'PLUGIN_ADMIN.SUPPORTED',
                                    'help' => 'PLUGIN_ADMIN.SUPPORTED_HELP',
                                    'classes' => 'fancy',
                                    'validate' => [
                                        'type' => 'commalist'
                                    ]
                                ],
                                'languages.default_lang' => [
                                    'type' => 'text',
                                    'size' => 'x-small',
                                    'label' => 'PLUGIN_ADMIN.DEFAULT_LANG',
                                    'help' => 'PLUGIN_ADMIN.DEFAULT_LANG_HELP'
                                ],
                                'languages.include_default_lang' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.INCLUDE_DEFAULT_LANG',
                                    'help' => 'PLUGIN_ADMIN.INCLUDE_DEFAULT_LANG_HELP',
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'languages.include_default_lang_file_extension' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.INCLUDE_DEFAULT_LANG_FILE_EXTENSION',
                                    'help' => 'PLUGIN_ADMIN.INCLUDE_DEFAULT_LANG_HELP_FILE_EXTENSION',
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'languages.content_fallback' => [
                                    'type' => 'list',
                                    'label' => 'PLUGIN_ADMIN.CONTENT_LANGUAGE_FALLBACKS',
                                    'help' => 'PLUGIN_ADMIN.CONTENT_LANGUAGE_FALLBACKS_HELP',
                                    'fields' => [
                                        'key' => [
                                            'type' => 'key',
                                            'label' => 'PLUGIN_ADMIN.LANGUAGE',
                                            'help' => 'PLUGIN_ADMIN.CONTENT_FALLBACK_LANGUAGE_HELP',
                                            'placeholder' => 'fr-ca'
                                        ],
                                        'value' => [
                                            'type' => 'selectize',
                                            'size' => 'large',
                                            'placeholder' => 'fr, en',
                                            'label' => 'PLUGIN_ADMIN.CONTENT_LANGUAGE_FALLBACK',
                                            'help' => 'PLUGIN_ADMIN.CONTENT_LANGUAGE_FALLBACK_HELP',
                                            'classes' => 'fancy'
                                        ]
                                    ]
                                ],
                                'languages.pages_fallback_only' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.PAGES_FALLBACK_ONLY',
                                    'help' => 'PLUGIN_ADMIN.PAGES_FALLBACK_ONLY_HELP',
                                    'highlight' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'languages.translations' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.LANGUAGE_TRANSLATIONS',
                                    'help' => 'PLUGIN_ADMIN.LANGUAGE_TRANSLATIONS_HELP',
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'languages.translations_fallback' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.TRANSLATIONS_FALLBACK',
                                    'help' => 'PLUGIN_ADMIN.TRANSLATIONS_FALLBACK_HELP',
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'languages.session_store_active' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.ACTIVE_LANGUAGE_IN_SESSION',
                                    'help' => 'PLUGIN_ADMIN.ACTIVE_LANGUAGE_IN_SESSION_HELP',
                                    'highlight' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'languages.http_accept_language' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.HTTP_ACCEPT_LANGUAGE',
                                    'help' => 'PLUGIN_ADMIN.HTTP_ACCEPT_LANGUAGE_HELP',
                                    'highlight' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'languages.override_locale' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.OVERRIDE_LOCALE',
                                    'help' => 'PLUGIN_ADMIN.OVERRIDE_LOCALE_HELP',
                                    'highlight' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'languages.debug' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.LANGUAGE_DEBUG',
                                    'help' => 'PLUGIN_ADMIN.LANGUAGE_DEBUG_HELP',
                                    'highlight' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ]
                            ]
                        ],
                        'http_headers' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_ADMIN.HTTP_HEADERS',
                            'fields' => [
                                'http_headers_section' => [
                                    'type' => 'section',
                                    'title' => 'PLUGIN_ADMIN.HTTP_HEADERS',
                                    'underline' => true
                                ],
                                'pages.expires' => [
                                    'type' => 'text',
                                    'size' => 'x-small',
                                    'append' => 'GRAV.NICETIME.SECOND_PLURAL',
                                    'label' => 'PLUGIN_ADMIN.EXPIRES',
                                    'help' => 'PLUGIN_ADMIN.EXPIRES_HELP',
                                    'validate' => [
                                        'type' => 'number',
                                        'min' => 1
                                    ]
                                ],
                                'pages.cache_control' => [
                                    'type' => 'text',
                                    'size' => 'medium',
                                    'label' => 'PLUGIN_ADMIN.CACHE_CONTROL',
                                    'help' => 'PLUGIN_ADMIN.CACHE_CONTROL_HELP',
                                    'placeholder' => 'e.g. public, max-age=31536000'
                                ],
                                'pages.last_modified' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.LAST_MODIFIED',
                                    'help' => 'PLUGIN_ADMIN.LAST_MODIFIED_HELP',
                                    'highlight' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'pages.etag' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.ETAG',
                                    'help' => 'PLUGIN_ADMIN.ETAG_HELP',
                                    'highlight' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'pages.vary_accept_encoding' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.VARY_ACCEPT_ENCODING',
                                    'help' => 'PLUGIN_ADMIN.VARY_ACCEPT_ENCODING_HELP',
                                    'highlight' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ]
                            ]
                        ],
                        'markdown' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_ADMIN.MARKDOWN',
                            'fields' => [
                                'markdow_section' => [
                                    'type' => 'section',
                                    'title' => 'PLUGIN_ADMIN.MARKDOWN',
                                    'underline' => true
                                ],
                                'pages.markdown.extra' => [
                                    'type' => 'toggle',
                                    'label' => 'Markdown extra',
                                    'help' => 'PLUGIN_ADMIN.MARKDOWN_EXTRA_HELP',
                                    'highlight' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'pages.markdown.auto_line_breaks' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.AUTO_LINE_BREAKS',
                                    'help' => 'PLUGIN_ADMIN.AUTO_LINE_BREAKS_HELP',
                                    'highlight' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'pages.markdown.auto_url_links' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.AUTO_URL_LINKS',
                                    'help' => 'PLUGIN_ADMIN.AUTO_URL_LINKS_HELP',
                                    'highlight' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'pages.markdown.escape_markup' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.ESCAPE_MARKUP',
                                    'help' => 'PLUGIN_ADMIN.ESCAPE_MARKUP_HELP',
                                    'highlight' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'pages.markdown.valid_link_attributes' => [
                                    'type' => 'selectize',
                                    'size' => 'large',
                                    'label' => 'PLUGIN_ADMIN.VALID_LINK_ATTRIBUTES',
                                    'help' => 'PLUGIN_ADMIN.VALID_LINK_ATTRIBUTES_HELP',
                                    'placeholder' => 'rel, target, id, class, classes',
                                    'classes' => 'fancy',
                                    'validate' => [
                                        'type' => 'commalist'
                                    ]
                                ]
                            ]
                        ],
                        'caching' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_ADMIN.CACHING',
                            'fields' => [
                                'caching_section' => [
                                    'type' => 'section',
                                    'title' => 'PLUGIN_ADMIN.CACHING',
                                    'underline' => true
                                ],
                                'cache.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.CACHING',
                                    'help' => 'PLUGIN_ADMIN.CACHING_HELP',
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'cache.check.method' => [
                                    'type' => 'select',
                                    'size' => 'medium',
                                    'classes' => 'fancy',
                                    'label' => 'PLUGIN_ADMIN.CACHE_CHECK_METHOD',
                                    'help' => 'PLUGIN_ADMIN.CACHE_CHECK_METHOD_HELP',
                                    'options' => [
                                        'file' => 'Markdown + Yaml file timestamps',
                                        'folder' => 'Folder timestamps',
                                        'hash' => 'All files timestamps',
                                        'none' => 'No timestamp checking'
                                    ]
                                ],
                                'cache.driver' => [
                                    'type' => 'select',
                                    'size' => 'small',
                                    'classes' => 'fancy',
                                    'label' => 'PLUGIN_ADMIN.CACHE_DRIVER',
                                    'help' => 'PLUGIN_ADMIN.CACHE_DRIVER_HELP',
                                    'options' => [
                                        'auto' => 'Auto detect',
                                        'file' => 'File',
                                        'apc' => 'APC',
                                        'apcu' => 'APCu',
                                        'memcache' => 'Memcache',
                                        'memcached' => 'Memcached',
                                        'wincache' => 'WinCache',
                                        'redis' => 'Redis'
                                    ]
                                ],
                                'cache.prefix' => [
                                    'type' => 'text',
                                    'size' => 'x-small',
                                    'label' => 'PLUGIN_ADMIN.CACHE_PREFIX',
                                    'help' => 'PLUGIN_ADMIN.CACHE_PREFIX_HELP',
                                    'placeholder' => 'PLUGIN_ADMIN.CACHE_PREFIX_PLACEHOLDER'
                                ],
                                'cache.purge_at' => [
                                    'type' => 'cron',
                                    'label' => 'PLUGIN_ADMIN.CACHE_PURGE_JOB',
                                    'help' => 'PLUGIN_ADMIN.CACHE_PURGE_JOB_HELP',
                                    'default' => '* 4 * * *'
                                ],
                                'cache.clear_at' => [
                                    'type' => 'cron',
                                    'label' => 'PLUGIN_ADMIN.CACHE_CLEAR_JOB',
                                    'help' => 'PLUGIN_ADMIN.CACHE_CLEAR_JOB_HELP',
                                    'default' => '* 3 * * *'
                                ],
                                'cache.clear_job_type' => [
                                    'type' => 'select',
                                    'size' => 'medium',
                                    'label' => 'PLUGIN_ADMIN.CACHE_JOB_TYPE',
                                    'help' => 'PLUGIN_ADMIN.CACHE_JOB_TYPE_HELP',
                                    'options' => [
                                        'standard' => 'Standard Cache Folders',
                                        'all' => 'All Cache Folders'
                                    ]
                                ],
                                'cache.clear_images_by_default' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.CLEAR_IMAGES_BY_DEFAULT',
                                    'help' => 'PLUGIN_ADMIN.CLEAR_IMAGES_BY_DEFAULT_HELP',
                                    'highlight' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'cache.cli_compatibility' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.CLI_COMPATIBILITY',
                                    'help' => 'PLUGIN_ADMIN.CLI_COMPATIBILITY_HELP',
                                    'highlight' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'cache.lifetime' => [
                                    'type' => 'text',
                                    'size' => 'small',
                                    'append' => 'GRAV.NICETIME.SECOND_PLURAL',
                                    'label' => 'PLUGIN_ADMIN.LIFETIME',
                                    'help' => 'PLUGIN_ADMIN.LIFETIME_HELP',
                                    'validate' => [
                                        'type' => 'number'
                                    ]
                                ],
                                'cache.gzip' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.GZIP_COMPRESSION',
                                    'help' => 'PLUGIN_ADMIN.GZIP_COMPRESSION_HELP',
                                    'highlight' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'cache.allow_webserver_gzip' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.ALLOW_WEBSERVER_GZIP',
                                    'help' => 'PLUGIN_ADMIN.ALLOW_WEBSERVER_GZIP_HELP',
                                    'highlight' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'cache.memcache.server' => [
                                    'type' => 'text',
                                    'size' => 'medium',
                                    'label' => 'PLUGIN_ADMIN.MEMCACHE_SERVER',
                                    'help' => 'PLUGIN_ADMIN.MEMCACHE_SERVER_HELP',
                                    'placeholder' => 'localhost'
                                ],
                                'cache.memcache.port' => [
                                    'type' => 'text',
                                    'size' => 'small',
                                    'label' => 'PLUGIN_ADMIN.MEMCACHE_PORT',
                                    'help' => 'PLUGIN_ADMIN.MEMCACHE_PORT_HELP',
                                    'placeholder' => '11211'
                                ],
                                'cache.memcached.server' => [
                                    'type' => 'text',
                                    'size' => 'medium',
                                    'label' => 'PLUGIN_ADMIN.MEMCACHED_SERVER',
                                    'help' => 'PLUGIN_ADMIN.MEMCACHED_SERVER_HELP',
                                    'placeholder' => 'localhost'
                                ],
                                'cache.memcached.port' => [
                                    'type' => 'text',
                                    'size' => 'small',
                                    'label' => 'PLUGIN_ADMIN.MEMCACHED_PORT',
                                    'help' => 'PLUGIN_ADMIN.MEMCACHED_PORT_HELP',
                                    'placeholder' => '11211'
                                ],
                                'cache.redis.socket' => [
                                    'type' => 'text',
                                    'size' => 'medium',
                                    'label' => 'PLUGIN_ADMIN.REDIS_SOCKET',
                                    'help' => 'PLUGIN_ADMIN.REDIS_SOCKET_HELP',
                                    'placeholder' => '/var/run/redis/redis.sock'
                                ],
                                'cache.redis.server' => [
                                    'type' => 'text',
                                    'size' => 'medium',
                                    'label' => 'PLUGIN_ADMIN.REDIS_SERVER',
                                    'help' => 'PLUGIN_ADMIN.REDIS_SERVER_HELP',
                                    'placeholder' => 'localhost'
                                ],
                                'cache.redis.port' => [
                                    'type' => 'text',
                                    'size' => 'small',
                                    'label' => 'PLUGIN_ADMIN.REDIS_PORT',
                                    'help' => 'PLUGIN_ADMIN.REDIS_PORT_HELP',
                                    'placeholder' => '6379'
                                ],
                                'cache.redis.password' => [
                                    'type' => 'text',
                                    'size' => 'small',
                                    'label' => 'PLUGIN_ADMIN.REDIS_PASSWORD'
                                ],
                                'cache.redis.database' => [
                                    'type' => 'text',
                                    'size' => 'medium',
                                    'label' => 'PLUGIN_ADMIN.REDIS_DATABASE',
                                    'help' => 'PLUGIN_ADMIN.REDIS_DATABASE_HELP',
                                    'placeholder' => '0',
                                    'validate' => [
                                        'type' => 'number',
                                        'min' => 0
                                    ]
                                ],
                                'flex_caching' => [
                                    'type' => 'section',
                                    'title' => 'PLUGIN_ADMIN.FLEX_CACHING'
                                ],
                                'flex.cache.index.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.FLEX_INDEX_CACHE_ENABLED',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'flex.cache.index.lifetime' => [
                                    'type' => 'text',
                                    'label' => 'PLUGIN_ADMIN.FLEX_INDEX_CACHE_LIFETIME',
                                    'default' => 60,
                                    'validate' => [
                                        'type' => 'int'
                                    ]
                                ],
                                'flex.cache.object.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.FLEX_OBJECT_CACHE_ENABLED',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'flex.cache.object.lifetime' => [
                                    'type' => 'text',
                                    'label' => 'PLUGIN_ADMIN.FLEX_OBJECT_CACHE_LIFETIME',
                                    'default' => 600,
                                    'validate' => [
                                        'type' => 'int'
                                    ]
                                ],
                                'flex.cache.render.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.FLEX_RENDER_CACHE_ENABLED',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'flex.cache.render.lifetime' => [
                                    'type' => 'text',
                                    'label' => 'PLUGIN_ADMIN.FLEX_RENDER_CACHE_LIFETIME',
                                    'default' => 600,
                                    'validate' => [
                                        'type' => 'int'
                                    ]
                                ]
                            ]
                        ],
                        'twig' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_ADMIN.TWIG_TEMPLATING',
                            'fields' => [
                                'twig_section' => [
                                    'type' => 'section',
                                    'title' => 'PLUGIN_ADMIN.TWIG_TEMPLATING',
                                    'underline' => true
                                ],
                                'twig.cache' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.TWIG_CACHING',
                                    'help' => 'PLUGIN_ADMIN.TWIG_CACHING_HELP',
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'twig.debug' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.TWIG_DEBUG',
                                    'help' => 'PLUGIN_ADMIN.TWIG_DEBUG_HELP',
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'twig.auto_reload' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.DETECT_CHANGES',
                                    'help' => 'PLUGIN_ADMIN.DETECT_CHANGES_HELP',
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'twig.autoescape' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.AUTOESCAPE_VARIABLES',
                                    'help' => 'PLUGIN_ADMIN.AUTOESCAPE_VARIABLES_HELP',
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
                                'twig.umask_fix' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.TWIG_UMASK_FIX',
                                    'help' => 'PLUGIN_ADMIN.TWIG_UMASK_FIX_HELP',
                                    'highlight' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ]
                            ]
                        ],
                        'assets' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_ADMIN.ASSETS',
                            'fields' => [
                                'general_config_section' => [
                                    'type' => 'section',
                                    'title' => 'PLUGIN_ADMIN.GENERAL_CONFIG',
                                    'underline' => true
                                ],
                                'assets.enable_asset_timestamp' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.ENABLED_TIMESTAMPS_ON_ASSETS',
                                    'help' => 'PLUGIN_ADMIN.ENABLED_TIMESTAMPS_ON_ASSETS_HELP',
                                    'highlight' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'assets.enable_asset_sri' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.ENABLED_SRI_ON_ASSETS',
                                    'help' => 'PLUGIN_ADMIN.ENABLED_SRI_ON_ASSETS_HELP',
                                    'highlight' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'assets.collections' => [
                                    'type' => 'multilevel',
                                    'label' => 'PLUGIN_ADMIN.COLLECTIONS',
                                    'placeholder_key' => 'collection_name',
                                    'placeholder_value' => 'collection_path',
                                    'validate' => [
                                        'type' => 'array'
                                    ]
                                ],
                                'css_assets_section' => [
                                    'type' => 'section',
                                    'title' => 'PLUGIN_ADMIN.CSS_ASSETS',
                                    'underline' => true
                                ],
                                'assets.css_pipeline' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.CSS_PIPELINE',
                                    'help' => 'PLUGIN_ADMIN.CSS_PIPELINE_HELP',
                                    'highlight' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'assets.css_pipeline_include_externals' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.CSS_PIPELINE_INCLUDE_EXTERNALS',
                                    'help' => 'PLUGIN_ADMIN.CSS_PIPELINE_INCLUDE_EXTERNALS_HELP',
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'assets.css_pipeline_before_excludes' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.CSS_PIPELINE_BEFORE_EXCLUDES',
                                    'help' => 'PLUGIN_ADMIN.CSS_PIPELINE_BEFORE_EXCLUDES_HELP',
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'assets.css_minify' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.CSS_MINIFY',
                                    'help' => 'PLUGIN_ADMIN.CSS_MINIFY_HELP',
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'assets.css_minify_windows' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.CSS_MINIFY_WINDOWS_OVERRIDE',
                                    'help' => 'PLUGIN_ADMIN.CSS_MINIFY_WINDOWS_OVERRIDE_HELP',
                                    'highlight' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'assets.css_rewrite' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.CSS_REWRITE',
                                    'help' => 'PLUGIN_ADMIN.CSS_REWRITE_HELP',
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'js_assets_section' => [
                                    'type' => 'section',
                                    'title' => 'PLUGIN_ADMIN.JS_ASSETS',
                                    'underline' => true
                                ],
                                'assets.js_pipeline' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.JAVASCRIPT_PIPELINE',
                                    'help' => 'PLUGIN_ADMIN.JAVASCRIPT_PIPELINE_HELP',
                                    'highlight' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'assets.js_pipeline_include_externals' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.JAVASCRIPT_PIPELINE_INCLUDE_EXTERNALS',
                                    'help' => 'PLUGIN_ADMIN.JAVASCRIPT_PIPELINE_INCLUDE_EXTERNALS_HELP',
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'assets.js_pipeline_before_excludes' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.JAVASCRIPT_PIPELINE_BEFORE_EXCLUDES',
                                    'help' => 'PLUGIN_ADMIN.JAVASCRIPT_PIPELINE_BEFORE_EXCLUDES_HELP',
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'assets.js_minify' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.JAVASCRIPT_MINIFY',
                                    'help' => 'PLUGIN_ADMIN.JAVASCRIPT_MINIFY_HELP',
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'js_module_assets_section' => [
                                    'type' => 'section',
                                    'title' => 'PLUGIN_ADMIN.JS_MODULE_ASSETS',
                                    'underline' => true
                                ],
                                'assets.js_module_pipeline' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.JAVASCRIPT_MODULE_PIPELINE',
                                    'help' => 'PLUGIN_ADMIN.JAVASCRIPT_MODULE_PIPELINE_HELP',
                                    'highlight' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'assets.js_module_pipeline_include_externals' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.JAVASCRIPT_MODULE_PIPELINE_INCLUDE_EXTERNALS',
                                    'help' => 'PLUGIN_ADMIN.JAVASCRIPT_MODULE_PIPELINE_INCLUDE_EXTERNALS_HELP',
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'assets.js_module_pipeline_before_excludes' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.JAVASCRIPT_MODULE_PIPELINE_BEFORE_EXCLUDES',
                                    'help' => 'PLUGIN_ADMIN.JAVASCRIPT_MODULE_PIPELINE_BEFORE_EXCLUDES_HELP',
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ]
                            ]
                        ],
                        'errors' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_ADMIN.ERROR_HANDLER',
                            'fields' => [
                                'errors_section' => [
                                    'type' => 'section',
                                    'title' => 'PLUGIN_ADMIN.ERROR_HANDLER',
                                    'underline' => true
                                ],
                                'errors.display' => [
                                    'type' => 'select',
                                    'label' => 'PLUGIN_ADMIN.DISPLAY_ERRORS',
                                    'help' => 'PLUGIN_ADMIN.DISPLAY_ERRORS_HELP',
                                    'size' => 'medium',
                                    'highlight' => 1,
                                    'options' => [
                                        -1 => 'PLUGIN_ADMIN.ERROR_SYSTEM',
                                        0 => 'PLUGIN_ADMIN.ERROR_SIMPLE',
                                        1 => 'PLUGIN_ADMIN.ERROR_FULL_BACKTRACE'
                                    ],
                                    'validate' => [
                                        'type' => 'int'
                                    ]
                                ],
                                'errors.log' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.LOG_ERRORS',
                                    'help' => 'PLUGIN_ADMIN.LOG_ERRORS_HELP',
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'log.handler' => [
                                    'type' => 'select',
                                    'size' => 'small',
                                    'label' => 'PLUGIN_ADMIN.LOG_HANDLER',
                                    'help' => 'PLUGIN_ADMIN.LOG_HANDLER_HELP',
                                    'default' => 'file',
                                    'options' => [
                                        'file' => 'File',
                                        'syslog' => 'Syslog'
                                    ]
                                ],
                                'log.syslog.facility' => [
                                    'type' => 'select',
                                    'size' => 'small',
                                    'label' => 'PLUGIN_ADMIN.SYSLOG_FACILITY',
                                    'help' => 'PLUGIN_ADMIN.SYSLOG_FACILITY_HELP',
                                    'default' => 'local6',
                                    'options' => [
                                        'auth' => 'auth',
                                        'authpriv' => 'authpriv',
                                        'cron' => 'cron',
                                        'daemon' => 'daemon',
                                        'kern' => 'kern',
                                        'lpr' => 'lpr',
                                        'mail' => 'mail',
                                        'news' => 'news',
                                        'syslog' => 'syslog',
                                        'user' => 'user',
                                        'uucp' => 'uucp',
                                        'local0' => 'local0',
                                        'local1' => 'local1',
                                        'local2' => 'local2',
                                        'local3' => 'local3',
                                        'local4' => 'local4',
                                        'local5' => 'local5',
                                        'local6' => 'local6',
                                        'local7' => 'local7'
                                    ]
                                ],
                                'log.syslog.tag' => [
                                    'type' => 'text',
                                    'size' => 'small',
                                    'label' => 'PLUGIN_ADMIN.SYSLOG_TAG',
                                    'help' => 'PLUGIN_ADMIN.SYSLOG_TAG_HELP',
                                    'placeholder' => 'grav'
                                ]
                            ]
                        ],
                        'debugger' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_ADMIN.DEBUGGER',
                            'fields' => [
                                'debugger_section' => [
                                    'type' => 'section',
                                    'title' => 'PLUGIN_ADMIN.DEBUGGER',
                                    'underline' => true
                                ],
                                'debugger.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.DEBUGGER',
                                    'help' => 'PLUGIN_ADMIN.DEBUGGER_HELP',
                                    'highlight' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'debugger.provider' => [
                                    'type' => 'select',
                                    'label' => 'PLUGIN_ADMIN.DEBUGGER_PROVIDER',
                                    'help' => 'PLUGIN_ADMIN.DEBUGGER_PROVIDER_HELP',
                                    'size' => 'medium',
                                    'default' => 'debugbar',
                                    'options' => [
                                        'debugbar' => 'PLUGIN_ADMIN.DEBUGGER_DEBUGBAR',
                                        'clockwork' => 'PLUGIN_ADMIN.DEBUGGER_CLOCKWORK'
                                    ]
                                ],
                                'debugger.censored' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.DEBUGGER_CENSORED',
                                    'help' => 'PLUGIN_ADMIN.DEBUGGER_CENSORED_HELP',
                                    'highlight' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'debugger.shutdown.close_connection' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.SHUTDOWN_CLOSE_CONNECTION',
                                    'help' => 'PLUGIN_ADMIN.SHUTDOWN_CLOSE_CONNECTION_HELP',
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ]
                            ]
                        ],
                        'media' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_ADMIN.MEDIA',
                            'fields' => [
                                'media_section' => [
                                    'type' => 'section',
                                    'title' => 'PLUGIN_ADMIN.MEDIA',
                                    'underline' => true
                                ],
                                'images.default_image_quality' => [
                                    'type' => 'range',
                                    'append' => '%',
                                    'label' => 'PLUGIN_ADMIN.DEFAULT_IMAGE_QUALITY',
                                    'help' => 'PLUGIN_ADMIN.DEFAULT_IMAGE_QUALITY_HELP',
                                    'validate' => [
                                        'min' => 1,
                                        'max' => 100
                                    ]
                                ],
                                'images.cache_all' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.CACHE_ALL',
                                    'help' => 'PLUGIN_ADMIN.CACHE_ALL_HELP',
                                    'highlight' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'images.cache_perms' => [
                                    'type' => 'select',
                                    'size' => 'small',
                                    'label' => 'PLUGIN_ADMIN.CACHE_PERMS',
                                    'help' => 'PLUGIN_ADMIN.CACHE_PERMS_HELP',
                                    'highlight' => '0755',
                                    'options' => [
                                        '0755' => '0755',
                                        '0775' => '0775'
                                    ]
                                ],
                                'images.debug' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.IMAGES_DEBUG',
                                    'help' => 'PLUGIN_ADMIN.IMAGES_DEBUG_HELP',
                                    'highlight' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'images.auto_fix_orientation' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.IMAGES_AUTO_FIX_ORIENTATION',
                                    'help' => 'PLUGIN_ADMIN.IMAGES_AUTO_FIX_ORIENTATION_HELP',
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'images.defaults.loading' => [
                                    'type' => 'select',
                                    'size' => 'small',
                                    'label' => 'PLUGIN_ADMIN.IMAGES_LOADING',
                                    'help' => 'PLUGIN_ADMIN.IMAGES_LOADING_HELP',
                                    'highlight' => 'auto',
                                    'options' => [
                                        'auto' => 'Auto',
                                        'lazy' => 'Lazy',
                                        'eager' => 'Eager'
                                    ]
                                ],
                                'images.defaults.decoding' => [
                                    'type' => 'select',
                                    'size' => 'small',
                                    'label' => 'PLUGIN_ADMIN.IMAGES_DECODING',
                                    'help' => 'PLUGIN_ADMIN.IMAGES_DECODING_HELP',
                                    'highlight' => 'auto',
                                    'options' => [
                                        'auto' => 'Auto',
                                        'sync' => 'Sync',
                                        'async' => 'Async'
                                    ]
                                ],
                                'images.defaults.fetchpriority' => [
                                    'type' => 'select',
                                    'size' => 'small',
                                    'label' => 'PLUGIN_ADMIN.IMAGES_FETCHPRIORITY',
                                    'help' => 'PLUGIN_ADMIN.IMAGES_FETCHPRIORITY_HELP',
                                    'highlight' => 'auto',
                                    'options' => [
                                        'auto' => 'Auto',
                                        'high' => 'High',
                                        'low' => 'Low'
                                    ]
                                ],
                                'images.seofriendly' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.IMAGES_SEOFRIENDLY',
                                    'help' => 'PLUGIN_ADMIN.IMAGES_SEOFRIENDLY_HELP',
                                    'highlight' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'media.enable_media_timestamp' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.ENABLE_MEDIA_TIMESTAMP',
                                    'help' => 'PLUGIN_ADMIN.ENABLE_MEDIA_TIMESTAMP_HELP',
                                    'highlight' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'media.auto_metadata_exif' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.ENABLE_AUTO_METADATA',
                                    'help' => 'PLUGIN_ADMIN.ENABLE_AUTO_METADATA_HELP',
                                    'highlight' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'media.allowed_fallback_types' => [
                                    'type' => 'selectize',
                                    'size' => 'large',
                                    'label' => 'PLUGIN_ADMIN.FALLBACK_TYPES',
                                    'help' => 'PLUGIN_ADMIN.FALLBACK_TYPES_HELP',
                                    'classes' => 'fancy',
                                    'validate' => [
                                        'type' => 'commalist'
                                    ]
                                ],
                                'media.unsupported_inline_types' => [
                                    'type' => 'selectize',
                                    'size' => 'large',
                                    'label' => 'PLUGIN_ADMIN.INLINE_TYPES',
                                    'help' => 'PLUGIN_ADMIN.INLINE_TYPES_HELP',
                                    'classes' => 'fancy',
                                    'validate' => [
                                        'type' => 'commalist'
                                    ]
                                ],
                                'section_images_cls' => [
                                    'type' => 'section',
                                    'title' => 'PLUGIN_ADMIN.IMAGES_CLS_TITLE',
                                    'underline' => true
                                ],
                                'images.cls.auto_sizes' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.IMAGES_CLS_AUTO_SIZES',
                                    'help' => 'PLUGIN_ADMIN.IMAGES_CLS_AUTO_SIZES_HELP',
                                    'highlight' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'images.cls.aspect_ratio' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.IMAGES_CLS_ASPECT_RATIO',
                                    'help' => 'PLUGIN_ADMIN.IMAGES_CLS_ASPECT_RATIO_HELP',
                                    'highlight' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'images.cls.retina_scale' => [
                                    'type' => 'select',
                                    'label' => 'PLUGIN_ADMIN.IMAGES_CLS_RETINA_SCALE',
                                    'help' => 'PLUGIN_ADMIN.IMAGES_CLS_RETINA_SCALE_HELP',
                                    'size' => 'small',
                                    'highlight' => 1,
                                    'options' => [
                                        1 => '1X',
                                        2 => '2X',
                                        3 => '3X',
                                        4 => '4X'
                                    ]
                                ]
                            ]
                        ],
                        'session' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_ADMIN.SESSION',
                            'fields' => [
                                'session_section' => [
                                    'type' => 'section',
                                    'title' => 'PLUGIN_ADMIN.SESSION',
                                    'underline' => true
                                ],
                                'session.enabled' => [
                                    'type' => 'hidden',
                                    'label' => 'PLUGIN_ADMIN.ENABLED',
                                    'help' => 'PLUGIN_ADMIN.SESSION_ENABLED_HELP',
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'default' => true,
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'session.initialize' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.SESSION_INITIALIZE',
                                    'help' => 'PLUGIN_ADMIN.SESSION_INITIALIZE_HELP',
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'default' => true,
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'session.timeout' => [
                                    'type' => 'text',
                                    'size' => 'small',
                                    'append' => 'GRAV.NICETIME.SECOND_PLURAL',
                                    'label' => 'PLUGIN_ADMIN.TIMEOUT',
                                    'help' => 'PLUGIN_ADMIN.TIMEOUT_HELP',
                                    'validate' => [
                                        'type' => 'number',
                                        'min' => 0
                                    ]
                                ],
                                'session.name' => [
                                    'type' => 'text',
                                    'size' => 'small',
                                    'label' => 'PLUGIN_ADMIN.NAME',
                                    'help' => 'PLUGIN_ADMIN.SESSION_NAME_HELP'
                                ],
                                'session.uniqueness' => [
                                    'type' => 'select',
                                    'size' => 'medium',
                                    'label' => 'PLUGIN_ADMIN.SESSION_UNIQUENESS',
                                    'help' => 'PLUGIN_ADMIN.SESSION_UNIQUENESS_HELP',
                                    'highlight' => 'path',
                                    'default' => 'path',
                                    'options' => [
                                        'path' => 'Grav\'s root file path',
                                        'salt' => 'Grav\'s random security salt'
                                    ]
                                ],
                                'session.secure' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.SESSION_SECURE',
                                    'help' => 'PLUGIN_ADMIN.SESSION_SECURE_HELP',
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'default' => false,
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'session.secure_https' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.SESSION_SECURE_HTTPS',
                                    'help' => 'PLUGIN_ADMIN.SESSION_SECURE_HTTPS_HELP',
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'default' => true,
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'session.httponly' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.SESSION_HTTPONLY',
                                    'help' => 'PLUGIN_ADMIN.SESSION_HTTPONLY_HELP',
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'default' => true,
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'session.domain' => [
                                    'type' => 'text',
                                    'size' => 'small',
                                    'label' => 'PLUGIN_ADMIN.SESSION_DOMAIN',
                                    'help' => 'PLUGIN_ADMIN.SESSION_DOMAIN_HELP'
                                ],
                                'session.path' => [
                                    'type' => 'text',
                                    'size' => 'small',
                                    'label' => 'PLUGIN_ADMIN.SESSION_PATH',
                                    'help' => 'PLUGIN_ADMIN.SESSION_PATH_HELP'
                                ],
                                'session.samesite' => [
                                    'type' => 'text',
                                    'size' => 'small',
                                    'label' => 'PLUGIN_ADMIN.SESSION_SAMESITE',
                                    'help' => 'PLUGIN_ADMIN.SESSION_SAMESITE_HELP'
                                ],
                                'session.split' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.SESSION_SPLIT',
                                    'help' => 'PLUGIN_ADMIN.SESSION_SPLIT_HELP',
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'default' => true,
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ]
                            ]
                        ],
                        'advanced' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_ADMIN.ADVANCED',
                            'fields' => [
                                'advanced_section' => [
                                    'type' => 'section',
                                    'title' => 'PLUGIN_ADMIN.ADVANCED',
                                    'underline' => true
                                ],
                                'gpm_section' => [
                                    'type' => 'section',
                                    'title' => 'PLUGIN_ADMIN.GPM_SECTION'
                                ],
                                'gpm.releases' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.GPM_RELEASES',
                                    'highlight' => 'stable',
                                    'help' => 'PLUGIN_ADMIN.GPM_RELEASES_HELP',
                                    'options' => [
                                        'stable' => 'PLUGIN_ADMIN.STABLE',
                                        'testing' => 'PLUGIN_ADMIN.TESTING'
                                    ]
                                ],
                                'gpm.official_gpm_only' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.GPM_OFFICIAL_ONLY',
                                    'highlight' => 1,
                                    'help' => 'PLUGIN_ADMIN.GPM_OFFICIAL_ONLY_HELP',
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'default' => true,
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'http_section' => [
                                    'type' => 'section',
                                    'title' => 'PLUGIN_ADMIN.HTTP_SECTION'
                                ],
                                'http.method' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.GPM_METHOD',
                                    'highlight' => 'auto',
                                    'help' => 'PLUGIN_ADMIN.GPM_METHOD_HELP',
                                    'options' => [
                                        'auto' => 'PLUGIN_ADMIN.AUTO',
                                        'fopen' => 'PLUGIN_ADMIN.FOPEN',
                                        'curl' => 'PLUGIN_ADMIN.CURL'
                                    ]
                                ],
                                'http.enable_proxy' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.SSL_ENABLE_PROXY',
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'default' => false,
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'http.proxy_url' => [
                                    'type' => 'text',
                                    'size' => 'medium',
                                    'placeholder' => 'e.g. 127.0.0.1:3128',
                                    'label' => 'PLUGIN_ADMIN.PROXY_URL',
                                    'help' => 'PLUGIN_ADMIN.PROXY_URL_HELP'
                                ],
                                'http.proxy_cert_path' => [
                                    'type' => 'text',
                                    'size' => 'medium',
                                    'placeholder' => 'e.g. /Users/bob/certs/',
                                    'label' => 'PLUGIN_ADMIN.PROXY_CERT',
                                    'help' => 'PLUGIN_ADMIN.PROXY_CERT_HELP'
                                ],
                                'http.verify_peer' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.SSL_VERIFY_PEER',
                                    'highlight' => 1,
                                    'help' => 'PLUGIN_ADMIN.SSL_VERIFY_PEER_HELP',
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'http.verify_host' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.SSL_VERIFY_HOST',
                                    'highlight' => 1,
                                    'help' => 'PLUGIN_ADMIN.SSL_VERIFY_HOST_HELP',
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'http.concurrent_connections' => [
                                    'type' => 'number',
                                    'size' => 'x-small',
                                    'label' => 'PLUGIN_ADMIN.HTTP_CONNECTIONS',
                                    'help' => 'PLUGIN_ADMIN.HTTP_CONNECTIONS_HELP',
                                    'validate' => [
                                        'min' => 1,
                                        'max' => 20
                                    ]
                                ],
                                'misc_section' => [
                                    'type' => 'section',
                                    'title' => 'PLUGIN_ADMIN.MISC_SECTION'
                                ],
                                'reverse_proxy_setup' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.REVERSE_PROXY',
                                    'highlight' => 0,
                                    'help' => 'PLUGIN_ADMIN.REVERSE_PROXY_HELP',
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'username_regex' => [
                                    'type' => 'text',
                                    'size' => 'large',
                                    'label' => 'PLUGIN_ADMIN.USERNAME_REGEX',
                                    'help' => 'PLUGIN_ADMIN.USERNAME_REGEX_HELP'
                                ],
                                'pwd_regex' => [
                                    'type' => 'text',
                                    'size' => 'large',
                                    'label' => 'PLUGIN_ADMIN.PWD_REGEX',
                                    'help' => 'PLUGIN_ADMIN.PWD_REGEX_HELP'
                                ],
                                'intl_enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.INTL_ENABLED',
                                    'highlight' => 1,
                                    'help' => 'PLUGIN_ADMIN.INTL_ENABLED_HELP',
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'wrapped_site' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.WRAPPED_SITE',
                                    'highlight' => 0,
                                    'help' => 'PLUGIN_ADMIN.WRAPPED_SITE_HELP',
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'absolute_urls' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.ABSOLUTE_URLS',
                                    'highlight' => 0,
                                    'help' => 'PLUGIN_ADMIN.ABSOLUTE_URLS_HELP',
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'param_sep' => [
                                    'type' => 'select',
                                    'size' => 'medium',
                                    'label' => 'PLUGIN_ADMIN.PARAMETER_SEPARATOR',
                                    'classes' => 'fancy',
                                    'help' => 'PLUGIN_ADMIN.PARAMETER_SEPARATOR_HELP',
                                    'default' => '',
                                    'options' => [
                                        ':' => ': (default)',
                                        ';' => '; (for Apache running on Windows)'
                                    ]
                                ],
                                'force_ssl' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.FORCE_SSL',
                                    'highlight' => 0,
                                    'help' => 'PLUGIN_ADMIN.FORCE_SSL_HELP',
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'force_lowercase_urls' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.FORCE_LOWERCASE_URLS',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'help' => 'PLUGIN_ADMIN.FORCE_LOWERCASE_URLS_HELP',
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'custom_base_url' => [
                                    'type' => 'text',
                                    'size' => 'medium',
                                    'placeholder' => 'e.g. http://yoursite.com/yourpath',
                                    'label' => 'PLUGIN_ADMIN.CUSTOM_BASE_URL',
                                    'help' => 'PLUGIN_ADMIN.CUSTOM_BASE_URL_HELP'
                                ],
                                'http_x_forwarded.protocol' => [
                                    'type' => 'toggle',
                                    'label' => 'HTTP_X_FORWARDED_PROTO Enabled',
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
                                'http_x_forwarded.host' => [
                                    'type' => 'toggle',
                                    'label' => 'HTTP_X_FORWARDED_HOST Enabled',
                                    'highlight' => 0,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'http_x_forwarded.port' => [
                                    'type' => 'toggle',
                                    'label' => 'HTTP_X_FORWARDED_PORT Enabled',
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
                                'http_x_forwarded.ip' => [
                                    'type' => 'toggle',
                                    'label' => 'HTTP_X_FORWARDED IP Enabled',
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
                                'strict_mode.blueprint_compat' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.STRICT_BLUEPRINT_COMPAT',
                                    'highlight' => 0,
                                    'default' => 0,
                                    'help' => 'PLUGIN_ADMIN.STRICT_BLUEPRINT_COMPAT_HELP',
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'strict_mode.yaml_compat' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.STRICT_YAML_COMPAT',
                                    'highlight' => 0,
                                    'default' => 0,
                                    'help' => 'PLUGIN_ADMIN.STRICT_YAML_COMPAT_HELP',
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'strict_mode.twig_compat' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.STRICT_TWIG_COMPAT',
                                    'highlight' => 0,
                                    'default' => 0,
                                    'help' => 'PLUGIN_ADMIN.STRICT_TWIG_COMPAT_HELP',
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ]
                            ]
                        ],
                        'accounts' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_ADMIN.ACCOUNTS',
                            'fields' => [
                                'flex_accounts' => [
                                    'type' => 'section',
                                    'title' => 'User Accounts'
                                ],
                                'accounts.type' => [
                                    'type' => 'select',
                                    'label' => 'PLUGIN_ADMIN.ACCOUNTS_TYPE',
                                    'highlight' => 'stable',
                                    'help' => 'PLUGIN_ADMIN.ACCOUNTS_TYPE_HELP',
                                    'options' => [
                                        'regular' => 'PLUGIN_ADMIN.REGULAR',
                                        'flex' => 'PLUGIN_ADMIN.FLEX'
                                    ]
                                ],
                                'accounts.storage' => [
                                    'type' => 'select',
                                    'label' => 'PLUGIN_ADMIN.ACCOUNTS_STORAGE',
                                    'highlight' => 'stable',
                                    'help' => 'PLUGIN_ADMIN.ACCOUNTS_STORAGE_HELP',
                                    'options' => [
                                        'file' => 'PLUGIN_ADMIN.FILE',
                                        'folder' => 'PLUGIN_ADMIN.FOLDER'
                                    ]
                                ],
                                'accounts.avatar' => [
                                    'type' => 'select',
                                    'label' => 'PLUGIN_ADMIN.AVATAR',
                                    'default' => 'gravatar',
                                    'help' => 'PLUGIN_ADMIN.AVATAR_HELP',
                                    'options' => [
                                        'multiavatar' => 'Multiavatar [local]',
                                        'gravatar' => 'Gravatar [external]'
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
