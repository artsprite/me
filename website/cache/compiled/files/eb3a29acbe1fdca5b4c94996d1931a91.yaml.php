<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/me/website/user/plugins/autoseo/languages.yaml',
    'modified' => 1740099170,
    'size' => 3916,
    'data' => [
        'en' => [
            'PLUGINS' => [
                'AUTO_SEO' => [
                    'GLOBAL_CONFIG' => 'Global configuration',
                    'PLUGIN_STATUS' => 'Plugin status',
                    'DEFAULT_CONFIG' => 'Default values for the plugin configuration',
                    'PLUGIN_DEPENDENCY_FAILED' => 'Auto SEO Plugin failed to load. Composer dependencies not met.',
                    'ENABLE_PLUGIN' => 'Enable Auto SEO Plugin',
                    'TITLE' => [
                        'APPEND_SITE_TITLE' => [
                            'LABEL' => 'Append the site title to the "title" meta',
                            'HELP' => 'Concatenates the site title to the "title" metadata, e.g., from \'About Us\' to \'About Us | My Awesome Site\'.'
                        ],
                        'SEPARATOR' => [
                            'LABEL' => 'Separator text for "title" meta',
                            'HELP' => 'Text that separates the page title from the site title in the "title" metadata, e.g., \'About Us | My Awesome Site\' or \'About Us - My Awesome Site\'.'
                        ]
                    ],
                    'DESCRIPTION' => [
                        'ENABLED_LABEL' => 'Auto fill for "description" meta',
                        'ENABLED_HELP' => 'Lets you turn the plugin ON and OFF for the "description" metadata only.',
                        'LENGTH_LABEL' => 'Maximum word count for "description" meta',
                        'LENGTH_HELP' => 'The maximum count of words that will be used to fill the "description" metadata.'
                    ],
                    'KEYWORDS' => [
                        'ENABLED_LABEL' => 'Auto fill for the "keywords" meta',
                        'ENABLED_HELP' => 'Lets you turn the plugin ON and OFF for the "keywords" metadata only.',
                        'LENGTH_LABEL' => 'Maximum word count for "keywords" meta.',
                        'LENGTH_HELP' => 'The maximum count of words that will be used to fill the "keyword" metadata.'
                    ],
                    'FACEBOOK' => [
                        'ENABLED_LABEL' => 'Auto fill for the Open Graph tags (facebook)',
                        'ENABLED_HELP' => 'Lets you turn the plugin ON and OFF for the "Open Graph" metadata (facebook).'
                    ],
                    'TWITTER' => [
                        'ENABLED_LABEL' => 'Auto fill for the Twitter tags',
                        'ENABLED_HELP' => 'Lets you turn the plugin ON and OFF for the "Twitter Cards" metadata.'
                    ]
                ]
            ]
        ],
        'fr' => [
            'PLUGINS' => [
                'AUTO_SEO' => [
                    'GLOBAL_CONFIG' => 'Configuration globale',
                    'PLUGIN_STATUS' => 'Etat du plugin',
                    'DEFAULT_CONFIG' => 'Valeurs par défaut pour la configuration du plugin',
                    'PLUGIN_DEPENDENCY_FAILED' => 'le plug-in Auto SEO n\'a pas pu être chargé. Les dépendances de Composer ne sont pas remplies.',
                    'ENABLE_PLUGIN' => 'Activer le plugin Auto SEO Plugin',
                    'TITLE' => [
                        'APPEND_SITE_TITLE' => [
                            'LABEL' => 'Ajouter le titre du site à la méta "titre"',
                            'HELP' => 'Concatène le titre du site aux métadonnées « titre », par exemple de « À propos de nous » à « À propos de nous | Mon site génial\'.'
                        ],
                        'SEPARATOR' => [
                            'LABEL' => 'Texte de séparation pour la méta "titre"',
                            'HELP' => 'Texte qui sépare le titre de la page du titre du site dans les métadonnées « titre », par exemple « À propos de nous | Mon site génial » ou « À propos de nous – Mon site génial ».'
                        ]
                    ],
                    'DESCRIPTION' => [
                        'ENABLED_LABEL' => 'Remplissage automatique pour la méta "Description"',
                        'ENABLED_HELP' => 'Permet de mettre le plugin ON et OFF pour la métadonnée "Description" uniquement.',
                        'LENGTH_LABEL' => 'nombre maximal de mots pour la méta "Description"',
                        'LENGTH_HELP' => 'le nombre maximum de mots qui seront utilisés pour remplir la métadonnée "Description".'
                    ],
                    'KEYWORDS' => [
                        'ENABLED_LABEL' => 'Remplissage automatique pour la méta "Keywords"',
                        'ENABLED_HELP' => 'Permet de mettre le plugin ON et OFF pour la métadonnée "Keywords" uniquement.',
                        'LENGTH_LABEL' => 'Nombre maximal de mots pour la méta "Keywords".',
                        'LENGTH_HELP' => 'Le nombre maximum de mots qui seront utilisés pour remplir la métadonnée "Keywords".'
                    ],
                    'FACEBOOK' => [
                        'ENABLED_LABEL' => 'Remplissage automatique pour les tags Open Graph (facebook)',
                        'ENABLED_HELP' => 'Permet de mettre le plugin ON et OFF pour la métadonnée "Open Graph" (facebook).'
                    ],
                    'TWITTER' => [
                        'ENABLED_LABEL' => 'Remplissage automatique pour les tags Twitter',
                        'ENABLED_HELP' => 'Permet de mettre le plugin ON et OFF pour la métadonnée "Twitter Cards".'
                    ]
                ]
            ]
        ]
    ]
];
