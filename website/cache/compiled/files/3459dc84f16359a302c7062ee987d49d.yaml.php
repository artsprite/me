<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/me/website/system/blueprints/config/security.yaml',
    'modified' => 1730133084,
    'size' => 3236,
    'data' => [
        'title' => 'PLUGIN_ADMIN.SECURITY',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'xss_section' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_ADMIN.XSS_SECURITY',
                    'underline' => true
                ],
                'xss_whitelist' => [
                    'type' => 'selectize',
                    'size' => 'large',
                    'label' => 'PLUGIN_ADMIN.XSS_WHITELIST_PERMISSIONS',
                    'help' => 'PLUGIN_ADMIN.XSS_WHITELIST_PERMISSIONS_HELP',
                    'placeholder' => 'admin.super',
                    'classes' => 'fancy',
                    'validate' => [
                        'type' => 'commalist'
                    ]
                ],
                'xss_enabled.on_events' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.XSS_ON_EVENTS',
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
                'xss_enabled.invalid_protocols' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.XSS_INVALID_PROTOCOLS',
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
                'xss_invalid_protocols' => [
                    'type' => 'selectize',
                    'size' => 'large',
                    'label' => 'PLUGIN_ADMIN.XSS_INVALID_PROTOCOLS_LIST',
                    'classes' => 'fancy',
                    'validate' => [
                        'type' => 'commalist'
                    ]
                ],
                'xss_enabled.moz_binding' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.XSS_MOZ_BINDINGS',
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
                'xss_enabled.html_inline_styles' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.XSS_HTML_INLINE_STYLES',
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
                'xss_enabled.dangerous_tags' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.XSS_DANGEROUS_TAGS',
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
                'xss_dangerous_tags' => [
                    'type' => 'selectize',
                    'size' => 'large',
                    'label' => 'PLUGIN_ADMIN.XSS_DANGEROUS_TAGS_LIST',
                    'classes' => 'fancy',
                    'validate' => [
                        'type' => 'commalist'
                    ]
                ],
                'uploads_section' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_ADMIN.UPLOADS_SECURITY',
                    'underline' => true
                ],
                'uploads_dangerous_extensions' => [
                    'type' => 'selectize',
                    'size' => 'large',
                    'label' => 'PLUGIN_ADMIN.UPLOADS_DANGEROUS_EXTENSIONS',
                    'help' => 'PLUGIN_ADMIN.UPLOADS_DANGEROUS_EXTENSIONS_HELP',
                    'classes' => 'fancy',
                    'validate' => [
                        'type' => 'commalist'
                    ]
                ],
                'sanitize_svg' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.SANITIZE_SVG',
                    'help' => 'PLUGIN_ADMIN.SANITIZE_SVG_HELP',
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
        ]
    ]
];
