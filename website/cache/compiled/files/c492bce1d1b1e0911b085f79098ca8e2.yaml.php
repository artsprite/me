<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/me/website/system/blueprints/config/scheduler.yaml',
    'modified' => 1730133084,
    'size' => 2229,
    'data' => [
        'title' => 'PLUGIN_ADMIN.SCHEDULER',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'status_title' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_ADMIN.SCHEDULER_STATUS',
                    'underline' => true
                ],
                'status' => [
                    'type' => 'cronstatus',
                    'validate' => [
                        'type' => 'commalist'
                    ]
                ],
                'jobs_title' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_ADMIN.SCHEDULER_JOBS',
                    'underline' => true
                ],
                'custom_jobs' => [
                    'type' => 'list',
                    'style' => 'vertical',
                    'label' => NULL,
                    'classes' => 'cron-job-list compact',
                    'key' => 'id',
                    'fields' => [
                        '.id' => [
                            'type' => 'key',
                            'label' => 'ID',
                            'placeholder' => 'process-name',
                            'validate' => [
                                'required' => true,
                                'pattern' => '[a-zа-я0-9_\\-]+',
                                'max' => 20,
                                'message' => 'ID must be lowercase with dashes/underscores only and less than 20 characters'
                            ]
                        ],
                        '.command' => [
                            'type' => 'text',
                            'label' => 'PLUGIN_ADMIN.COMMAND',
                            'placeholder' => 'ls',
                            'validate' => [
                                'required' => true
                            ]
                        ],
                        '.args' => [
                            'type' => 'text',
                            'label' => 'PLUGIN_ADMIN.EXTRA_ARGUMENTS',
                            'placeholder' => '-lah'
                        ],
                        '.at' => [
                            'type' => 'text',
                            'wrapper_classes' => 'cron-selector',
                            'label' => 'PLUGIN_ADMIN.SCHEDULER_RUNAT',
                            'help' => 'PLUGIN_ADMIN.SCHEDULER_RUNAT_HELP',
                            'placeholder' => '* * * * *',
                            'validate' => [
                                'required' => true
                            ]
                        ],
                        '.output' => [
                            'type' => 'text',
                            'label' => 'PLUGIN_ADMIN.SCHEDULER_OUTPUT',
                            'help' => 'PLUGIN_ADMIN.SCHEDULER_OUTPUT_HELP',
                            'placeholder' => 'logs/ls-cron.out'
                        ],
                        '.output_mode' => [
                            'type' => 'select',
                            'label' => 'PLUGIN_ADMIN.SCHEDULER_OUTPUT_TYPE',
                            'help' => 'PLUGIN_ADMIN.SCHEDULER_OUTPUT_TYPE_HELP',
                            'default' => 'append',
                            'options' => [
                                'append' => 'Append',
                                'overwrite' => 'Overwrite'
                            ]
                        ],
                        '.email' => [
                            'type' => 'text',
                            'label' => 'PLUGIN_ADMIN.SCHEDULER_EMAIL',
                            'help' => 'PLUGIN_ADMIN.SCHEDULER_EMAIL_HELP',
                            'placeholder' => 'notifications@yoursite.com'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
