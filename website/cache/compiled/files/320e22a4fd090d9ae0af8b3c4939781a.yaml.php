<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/me/website/user/plugins/flex-objects/languages/es.yaml',
    'modified' => 1730133084,
    'size' => 3212,
    'data' => [
        'PLUGIN_FLEX_OBJECTS' => [
            'PLUGIN_NAME' => 'Flex Objects',
            'PLUGIN_DESCRIPTION' => 'El plugin Flex Objects permite manejar Objetos Flex en Grav Admin.',
            'TITLE' => 'Flex Objects',
            'TYPES_TITLE' => 'Directorios',
            'AFTER_SAVE' => 'Después de guardar…',
            'LIST_INFO' => 'Mostrando de {from} a {to} de {total} registros',
            'EMPTY_RESULT' => 'The requested query returns no result',
            'USE_BUILT_IN_CSS' => 'Usar CSS incorporado',
            'EXTRA_ADMIN_TWIG_PATH' => 'Ruta extra de twig para Admin',
            'DIRECTORIES' => 'Directorios',
            'CSV' => 'CSV',
            'PARENTS' => 'Madres',
            'NEW' => 'Nuevo',
            'CONTROLLER' => [
                'TASK_DELETE_SUCCESS' => 'Entrada eliminada exitosamente',
                'TASK_DELETE_FAILURE' => 'Falla al eliminar la entrada: %s',
                'TASK_NEW_FOLDER_SUCCESS' => 'Carpeta creada exitosamente',
                'TASK_COPY_SUCCESS' => 'Copia creada exitosamente',
                'TASK_COPY_FAILURE' => 'Falla al crear la copia: %s',
                'TASK_SAVE_SUCCESS' => 'Entrada guardada exitosamente',
                'TASK_SAVE_FAILURE' => 'Falla al guardar la entrada: %s',
                'TASK_CONFIGURE_SUCCESS' => 'Configuración gardada exitosamente',
                'TASK_CONFIGURE_FAILURE' => 'Falla al guardar la configuración: %s'
            ],
            'ACTION' => [
                'CREATE_NEW' => 'Crear nuevo ítem',
                'EDIT_ITEM' => 'Editar ítem',
                'LIST_ITEMS' => 'Listar ítems',
                'DELETE_N' => 'Eliminar',
                'REALLY_DELETE' => '¿Realmente quieres eliminar %s permanentemente?',
                'SEARCH_PLACEHOLDER' => 'Buscar…',
                'ADVANCED_OPTIONS' => 'Opciones avazadas',
                'APPLY_FILTERS' => 'Aplicar filtros',
                'RESET_FILTERS' => 'Restablecer filtros',
                'ACTIONS' => 'Acciones'
            ],
            'FILTER' => [
                'PAGE_ATTRIBUTES' => 'Atributos de página',
                'PAGE_TYPES' => 'Tipos de página',
                'MODULAR_TYPES' => 'Tipos de módulo'
            ],
            'LANGUAGE' => [
                'USING_DEFAULT' => 'Usando archivo de idioma <b>Predeterminado</b>.',
                'UNUSED_DEFAULT' => 'También existe un archvivo de idioma <b>Predeterminado</b>.',
                'USING_OVERRIDE' => 'Usando el idioma de remplazo <b>%s</b>.',
                'NOT_TRANSLATED_YET' => '¡Esta página aún no ha sido traducida a <i class="fa fa-flag-o"></i> <b>%s</b>!',
                'NO_FALLBACK_FOUND' => 'No se han encontrado traducciones de apoyo.',
                'FALLING_BACK' => 'Retrocediendo a <b>%s</b>.'
            ],
            'STATE' => [
                'LOADING' => 'Cargando…',
                'CREATED_SUCCESSFULLY' => 'Creado exitosamente',
                'UPDATED_SUCCESSFULLY' => 'Actualizado exitosamente',
                'DELETED_SUCCESSFULLY' => 'Eliminado exitosamente',
                'EDITING_DRAFT' => 'Estás editando un borrador.',
                'NOT_CREATED_YET' => 'Esta página no existe hasta que se guarde.'
            ],
            'ERROR' => [
                'BAD_DIRECTORY' => 'Directorio errado',
                'PAGE_NOT_FOUND' => 'Página no encontrada',
                'PAGE_NOT_EXIST' => '¡Uy! Parece que esta página no existe.',
                'PAGE_FORBIDDEN' => '¡Uy! Parece que no tienes permiso para ver esta página.',
                'LAYOUT_NOT_FOUND' => 'Maquetación de objeto \'%s\' no encontrada.',
                'BLUEPRINT_NO_LIST' => 'Plano para <i>%s</i> no define campos mostrados ni remplazo de página de lista.',
                'BLUEPRINT_NO_LIST_ADVISE' => 'Por favor agrega una lista de campos para el archivo de planos.',
                'BLUEPRINT_NO_LIST_TEMPLATE' => 'Por favor crea un archivo de plantilla para el tipo en <b>flex-objects/types/%s/list.html.twig</b>',
                'LIST_EMPTY' => 'No hay entradas por el momento.',
                'LIST_EMPTY_ADD' => 'No hay entradas por el momento. Da clic en el botón <a href="%s">Agregar</a> para crear una nueva…',
                'NO_FLEX_DIRECTORIES' => 'No se detectan Directorios Flex'
            ]
        ]
    ]
];
