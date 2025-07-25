<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/me/website/user/plugins/flex-objects/languages/nl.yaml',
    'modified' => 1730133084,
    'size' => 3110,
    'data' => [
        'PLUGIN_FLEX_OBJECTS' => [
            'PLUGIN_NAME' => 'Flex Objects',
            'PLUGIN_DESCRIPTION' => 'De Flex Objects plugin maakt het mogelijk om flexibele objecten te maken en te beheren.',
            'TITLE' => 'Flex Objects',
            'TYPES_TITLE' => 'Mappen',
            'AFTER_SAVE' => 'Na opslaan…',
            'LIST_INFO' => '{from} tot {to} van {total} items weergegeven',
            'EMPTY_RESULT' => 'Deze zoekopdracht geeft geen resultaat',
            'USE_BUILT_IN_CSS' => 'Gebruik ingebouwde CSS',
            'EXTRA_ADMIN_TWIG_PATH' => 'Extra Admin Twig pad',
            'DIRECTORIES' => 'Mappen',
            'CSV' => 'CSV',
            'PARENTS' => 'Ouders',
            'CONTROLLER' => [
                'TASK_DELETE_SUCCESS' => 'Item succesvol verwijderd',
                'TASK_DELETE_FAILURE' => 'Item verwijderen mislukt: %s',
                'TASK_NEW_FOLDER_SUCCESS' => 'Map succesvol aangemaakt',
                'TASK_COPY_SUCCESS' => 'Kopie succesvol aangemaakt',
                'TASK_COPY_FAILURE' => 'Kopie aanmaken mislukt: %s',
                'TASK_SAVE_SUCCESS' => 'Item succesvol opgeslagen',
                'TASK_SAVE_FAILURE' => 'Item opslaan mislukt: %s',
                'TASK_CONFIGURE_SUCCESS' => 'Configuratie succesvol opgeslagen',
                'TASK_CONFIGURE_FAILURE' => 'Configuratie opslaan mislukt: %s'
            ],
            'ACTION' => [
                'CREATE_NEW' => 'Nieuw item aanmaken',
                'EDIT_ITEM' => 'Item bewerken',
                'LIST_ITEMS' => 'Items weergeven',
                'DELETE_N' => 'Verwijderen',
                'REALLY_DELETE' => 'Weet je zeker dat je %s permanent wilt verwijderen?',
                'SEARCH_PLACEHOLDER' => 'Zoeken…',
                'ADVANCED_OPTIONS' => 'Geavanceerde opties',
                'APPLY_FILTERS' => 'Filters toepassen',
                'RESET_FILTERS' => 'Filters resetten'
            ],
            'FILTER' => [
                'PAGE_ATTRIBUTES' => 'Pagina attributen',
                'PAGE_TYPES' => 'Pagina types',
                'MODULAR_TYPES' => 'Modulaire types'
            ],
            'LANGUAGE' => [
                'USING_DEFAULT' => '<b>Standaard</b> taalbestand in gebruik.',
                'UNUSED_DEFAULT' => 'Ongebruikt <b>standaard</b> taalbestand aanwezig.',
                'USING_OVERRIDE' => '<b>%s</b> taalbestand in gebruik.',
                'NOT_TRANSLATED_YET' => 'Deze pagina is nog niet vertaald naar <i class="fa fa-flag-o"></i> <b>%s</b>!',
                'NO_FALLBACK_FOUND' => 'Geen fallback taalbestand gevonden.',
                'FALLING_BACK' => 'Terugvallen op <b>%s</b> taalbestand.'
            ],
            'STATE' => [
                'LOADING' => 'Laden…',
                'CREATED_SUCCESSFULLY' => 'Succesvol aangemaakt',
                'UPDATED_SUCCESSFULLY' => 'Succesvol bijgewerkt',
                'DELETED_SUCCESSFULLY' => 'Succesvol verwijderd',
                'EDITING_DRAFT' => 'Je bewerkt een concept.',
                'NOT_CREATED_YET' => 'Deze pagina bestaat niet, totdat je hem opslaat.'
            ],
            'ERROR' => [
                'BAD_DIRECTORY' => 'Niet bestaande map',
                'PAGE_NOT_FOUND' => 'Pagina niet gevonden',
                'PAGE_NOT_EXIST' => 'Oeps! Deze pagina bestaat niet.',
                'PAGE_FORBIDDEN' => 'Oeps! Je hebt geen toegang tot deze pagina.',
                'LAYOUT_NOT_FOUND' => 'Object layout \'%s\' niet gevonden.',
                'BLUEPRINT_NO_LIST' => 'De blueprint van <i>%s</i> bevat geen velddata of lijst pagina overschrijving.',
                'BLUEPRINT_NO_LIST_ADVISE' => 'Voeg een <i>list</i> sectie toe aan de blueprint of overschrijf de <i>list</i> pagina in de configuratie.',
                'BLUEPRINT_NO_LIST_TEMPLATE' => 'Maak een template bestand voor dit type aan in <b>flex-objects/types/%s/list.html.twig</b>',
                'LIST_EMPTY' => 'Er zijn geen items gevonden.',
                'LIST_EMPTY_ADD' => 'Er zijn geen items op dit moment. Klik op de knop <a href="%s">Toevoegen</a> om een nieuw item aan te maken.',
                'NO_FLEX_DIRECTORIES' => 'Geen Flex Object mappen gedefinieerd.'
            ]
        ]
    ]
];
