<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/me/website/system/blueprints/config/backups.yaml',
    'modified' => 1730133084,
    'size' => 3861,
    'data' => [
        'title' => 'PLUGIN_ADMIN.BACKUPS',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'history_title' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_ADMIN.BACKUPS_HISTORY',
                    'underline' => true
                ],
                'history' => [
                    'type' => 'backupshistory'
                ],
                'config_title' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_ADMIN.BACKUPS_PURGE_CONFIG',
                    'underline' => true
                ],
                'purge.trigger' => [
                    'type' => 'select',
                    'label' => 'PLUGIN_ADMIN.BACKUPS_STORAGE_PURGE_TRIGGER',
                    'size' => 'medium',
                    'default' => 'space',
                    'options' => [
                        'space' => 'Maximum Backup Space',
                        'number' => 'Maximum Number of Backups',
                        'time' => 'maximum Retention Time'
                    ],
                    'validate' => [
                        'required' => true
                    ]
                ],
                'purge.max_backups_count' => [
                    'type' => 'number',
                    'label' => 'PLUGIN_ADMIN.BACKUPS_MAX_COUNT',
                    'default' => 25,
                    'size' => 'x-small',
                    'help' => 'PLUGIN_ADMIN.BACKUPS_MAX_COUNT',
                    'validate' => [
                        'min' => 0,
                        'type' => 'number',
                        'required' => true,
                        'message' => 'Must be a number 0 or greater'
                    ]
                ],
                'purge.max_backups_space' => [
                    'type' => 'number',
                    'label' => 'PLUGIN_ADMIN.BACKUPS_MAX_SPACE',
                    'append' => 'in GB',
                    'size' => 'x-small',
                    'default' => 5,
                    'validate' => [
                        'min' => 1,
                        'type' => 'number',
                        'required' => true,
                        'message' => 'Space must be 1GB or greater'
                    ]
                ],
                'purge.max_backups_time' => [
                    'type' => 'number',
                    'label' => 'PLUGIN_ADMIN.BACKUPS_MAX_RETENTION_TIME',
                    'append' => 'PLUGIN_ADMIN.BACKUPS_MAX_RETENTION_TIME_APPEND',
                    'size' => 'x-small',
                    'default' => 365,
                    'validate' => [
                        'min' => 7,
                        'type' => 'number',
                        'required' => true,
                        'message' => 'Rentenion days must be 7 or greater'
                    ]
                ],
                'profiles_title' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_ADMIN.BACKUPS_PROFILES',
                    'underline' => true
                ],
                'profiles' => [
                    'type' => 'list',
                    'style' => 'vertical',
                    'label' => NULL,
                    'classes' => 'backups-list compact',
                    'sort' => false,
                    'fields' => [
                        '.name' => [
                            'type' => 'text',
                            'label' => 'PLUGIN_ADMIN.NAME',
                            'placeholder' => 'PLUGIN_ADMIN.BACKUPS_PROFILE_NAME',
                            'validate' => [
                                'max' => 20,
                                'message' => 'Name must be less than 20 characters',
                                'required' => true
                            ]
                        ],
                        '.root' => [
                            'type' => 'text',
                            'label' => 'PLUGIN_ADMIN.BACKUPS_PROFILE_ROOT_FOLDER',
                            'help' => 'PLUGIN_ADMIN.BACKUPS_PROFILE_ROOT_FOLDER_HELP',
                            'placeholder' => '/',
                            'default' => '/',
                            'validate' => [
                                'required' => true
                            ]
                        ],
                        '.exclude_paths' => [
                            'type' => 'textarea',
                            'label' => 'PLUGIN_ADMIN.BACKUPS_PROFILE_EXCLUDE_PATHS',
                            'rows' => 5,
                            'placeholder' => '/backup/cache/images/logs/tmp',
                            'help' => 'PLUGIN_ADMIN.BACKUPS_PROFILE_EXCLUDE_PATHS_HELP'
                        ],
                        '.exclude_files' => [
                            'type' => 'textarea',
                            'label' => 'PLUGIN_ADMIN.BACKUPS_PROFILE_EXCLUDE_FILES',
                            'rows' => 5,
                            'placeholder' => '.DS_Store.git.svn.hg.idea.vscodenode_modules',
                            'help' => 'PLUGIN_ADMIN.BACKUPS_PROFILE_EXCLUDE_FILES_HELP'
                        ],
                        '.schedule' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADMIN.BACKUPS_PROFILE_SCHEDULE',
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
                        '.schedule_at' => [
                            'type' => 'cron',
                            'label' => 'PLUGIN_ADMIN.BACKUPS_PROFILE_SCHEDULE_AT',
                            'default' => '* 3 * * *',
                            'validate' => [
                                'required' => true
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
