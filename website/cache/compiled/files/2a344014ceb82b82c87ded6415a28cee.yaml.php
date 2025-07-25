<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/me/website/user/plugins/flex-objects/languages/de.yaml',
    'modified' => 1730133084,
    'size' => 3312,
    'data' => [
        'PLUGIN_FLEX_OBJECTS' => [
            'PLUGIN_NAME' => 'Flex Objects',
            'PLUGIN_DESCRIPTION' => 'Das Flex Objects Plugin ermöglicht die Verwaltung von Flex Objekten im Grav Admin.',
            'TITLE' => 'Flex Objects',
            'TYPES_TITLE' => 'Verzeichnisse',
            'AFTER_SAVE' => 'Nach dem Speichern…',
            'LIST_INFO' => '{from} bis {to} von {total} Einträgen angezeigt',
            'EMPTY_RESULT' => 'Diese Abfrage liefert keine Ergebnisse',
            'USE_BUILT_IN_CSS' => 'Nutze das integrierte Plugin CSS',
            'EXTRA_ADMIN_TWIG_PATH' => 'Extra Admin Twig Pfad',
            'DIRECTORIES' => 'Verzeichnisse',
            'CSV' => 'CSV',
            'PARENTS' => 'Eltern',
            'NEW' => 'Neu',
            'CONTROLLER' => [
                'TASK_DELETE_SUCCESS' => 'Eintrag erfolgreich gelöscht',
                'TASK_DELETE_FAILURE' => 'Löschen des Eintrags fehlgeschlagen: %s',
                'TASK_NEW_FOLDER_SUCCESS' => 'Ordner erfolgreich angelegt',
                'TASK_COPY_SUCCESS' => 'Kopie erfolgreich angelegt',
                'TASK_COPY_FAILURE' => 'Kopieren des Eintrags fehlgeschlagen: %s',
                'TASK_SAVE_SUCCESS' => 'Eintrag erfolgreich gespeichert',
                'TASK_SAVE_FAILURE' => 'Speichern des Eintrags fehlgeschlagen: %s',
                'TASK_CONFIGURE_SUCCESS' => 'Konfiguration erfolgreich gespeichert',
                'TASK_CONFIGURE_FAILURE' => 'Speichern der Konfiguration fehlgeschlagen: %s'
            ],
            'ACTION' => [
                'CREATE_NEW' => 'Neuen Eintrag anlegen',
                'EDIT_ITEM' => 'Eintrag bearbeiten',
                'LIST_ITEMS' => 'Einträge auflisten',
                'DELETE_N' => 'Löschen von',
                'REALLY_DELETE' => 'Willst du wirklich diese %s löschen?',
                'SEARCH_PLACEHOLDER' => 'Suchen…',
                'ADVANCED_OPTIONS' => 'Erweiterte Optionen',
                'APPLY_FILTERS' => 'Filter anwenden',
                'RESET_FILTERS' => 'Filter zurücksetzen',
                'ACTIONS' => 'Aktionen'
            ],
            'FILTER' => [
                'PAGE_ATTRIBUTES' => 'Seitenattribute',
                'PAGE_TYPES' => 'Seitentypen',
                'MODULAR_TYPES' => 'Modultypen'
            ],
            'LANGUAGE' => [
                'USING_DEFAULT' => 'Benutze <b>Standard</b> Sprachdatei.',
                'UNUSED_DEFAULT' => '<b>Standard</b> Sprachdatei (ohne Spracherweiterung) existiert, wird aber nicht genutzt.',
                'USING_OVERRIDE' => 'Sprachdatei <b>%s</b> in Nutzung.',
                'NOT_TRANSLATED_YET' => 'Diese Seite ist noch nicht in <i class="fa fa-flag-o"></i> <b>%s</b> übersetzt worden!',
                'NO_FALLBACK_FOUND' => 'Keine Übersetzung vorhanden, auf die zurückgegriffen werden kann.',
                'FALLING_BACK' => 'Falle zurück auf <b>%s</b>.'
            ],
            'STATE' => [
                'LOADING' => 'Lädt…',
                'CREATED_SUCCESSFULLY' => 'Erfolgreich angelegt',
                'UPDATED_SUCCESSFULLY' => 'Erfolgreich aktualisiert',
                'DELETED_SUCCESSFULLY' => 'Erfolgreich gelöscht',
                'EDITING_DRAFT' => 'Du bearbeitest einen gespeicherten Entwurf.',
                'NOT_CREATED_YET' => 'Diese Seite existiert nicht, bis du sie speicherst.'
            ],
            'ERROR' => [
                'BAD_DIRECTORY' => 'Fehlerhaftes Verzeichnis',
                'PAGE_NOT_FOUND' => 'Seite nicht gefunden',
                'PAGE_NOT_EXIST' => 'Uups! Diese Seite existiert nicht.',
                'PAGE_FORBIDDEN' => 'Uups! Du hast keine Berechtigung um auf diese Seite zuzugreifen.',
                'LAYOUT_NOT_FOUND' => 'Objekt-Layout \'%s\' nicht gefunden.',
                'BLUEPRINT_NO_LIST' => 'Der Blueprint von <i>%s</i> oder dessen Override enthält keine Informationen zur Listendarstellung.',
                'BLUEPRINT_NO_LIST_ADVISE' => 'Bitte ergänze den Blueprint um Feldliste.',
                'BLUEPRINT_NO_LIST_TEMPLATE' => 'Bitte leg für diesen Typ ein Template an <b>flex-objects/types/%s/list.html.twig</b>',
                'LIST_EMPTY' => 'Keine Einträge vorhanden.',
                'LIST_EMPTY_ADD' => 'Keine Einträge vorhanden. Klicke den <a href="%s">Hinzufügen</a> Button um einen Eintrag anzulegen.',
                'NO_FLEX_DIRECTORIES' => 'Keine Flex Verzeichnisse erkannt'
            ]
        ]
    ]
];
