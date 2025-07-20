<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/me/website/user/plugins/draft-preview/languages.yaml',
    'modified' => 1752065974,
    'size' => 721,
    'data' => [
        'en' => [
            'PLUGIN_DRAFT_PREVIEW' => [
                'ROUTE' => 'Route',
                'ROUTE_HELP' => 'Under which slug should the preview be generated',
                'ROUTE_ERROR' => 'The page cannot be found for the preview. It must be unpublished.',
                'SESSION_WARNING' => 'Please enable sessions in your grav system config. See https://github.com/bitstarr/grav-plugin-draft-preview#configuration'
            ]
        ],
        'de' => [
            'PLUGIN_DRAFT_PREVIEW' => [
                'ROUTE' => 'Route',
                'ROUTE_HELP' => 'Unter welcher slug soll die Preview generiert werden',
                'ROUTE_ERROR' => 'Die Seite ist nicht für die Preview aufzufinden. Sie muss unveröffentlicht sein.',
                'SESSION_WARNING' => 'Session müssen in den grav Systemeinstellungen aktiviert sein. Mehr dazu unter https://github.com/bitstarr/grav-plugin-draft-preview#configuration'
            ]
        ]
    ]
];
