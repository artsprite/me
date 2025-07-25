<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/me/website/user/plugins/flex-objects/languages/ja.yaml',
    'modified' => 1730133084,
    'size' => 3858,
    'data' => [
        'PLUGIN_FLEX_OBJECTS' => [
            'PLUGIN_NAME' => 'Flex Objects',
            'PLUGIN_DESCRIPTION' => 'Flex Objects plugin allows you to manage Flex Objects in Grav Admin.',
            'TITLE' => 'Flex Objects',
            'TYPES_TITLE' => 'ディレクトリー',
            'AFTER_SAVE' => '保存した後…',
            'LIST_INFO' => '全{total}件中、{from} 件目から {to} 件目を表示中',
            'EMPTY_RESULT' => '指定の検索条件を満たすものは、見つかりませんでした',
            'USE_BUILT_IN_CSS' => '内蔵の CSS を利用',
            'EXTRA_ADMIN_TWIG_PATH' => '追加の Admin Twig パス',
            'DIRECTORIES' => 'ディレクトリー',
            'CSV' => 'CSV',
            'PARENTS' => '親',
            'NEW' => '新規',
            'CONTROLLER' => [
                'TASK_DELETE_SUCCESS' => 'データを削除しました',
                'TASK_DELETE_FAILURE' => 'データの削除に失敗: %s',
                'TASK_NEW_FOLDER_SUCCESS' => 'フォルダーを作成しました',
                'TASK_COPY_SUCCESS' => 'コピーを作成しました',
                'TASK_COPY_FAILURE' => 'コピーの作成に失敗: %s',
                'TASK_SAVE_SUCCESS' => 'データを保存しました',
                'TASK_SAVE_FAILURE' => 'データの保存に失敗: %s',
                'TASK_CONFIGURE_SUCCESS' => '設定を保存しました',
                'TASK_CONFIGURE_FAILURE' => '設定の保存に失敗: %s'
            ],
            'ACTION' => [
                'CREATE_NEW' => '新しいデータを作成',
                'EDIT_ITEM' => 'データの編集',
                'LIST_ITEMS' => 'データの一覧表示',
                'DELETE_N' => '削除',
                'REALLY_DELETE' => '%s を削除します。復元はできませんがよろしいですか？',
                'SEARCH_PLACEHOLDER' => '検索…',
                'ADVANCED_OPTIONS' => '詳細設定',
                'APPLY_FILTERS' => 'フィルターを適用',
                'RESET_FILTERS' => '標準にリセットする',
                'ACTIONS' => 'アクション'
            ],
            'FILTER' => [
                'PAGE_ATTRIBUTES' => 'ページ属性',
                'PAGE_TYPES' => 'ページ タイプ',
                'MODULAR_TYPES' => 'モジュラー タイプ'
            ],
            'LANGUAGE' => [
                'USING_DEFAULT' => '<b>デフォルト</b> の言語ファイルを使用しています。',
                'UNUSED_DEFAULT' => '未使用の <b>デフォルト</b> の言語ファイルもあります。',
                'USING_OVERRIDE' => '<b>%s</b> 言語ファイルでオーバーライドします。',
                'NOT_TRANSLATED_YET' => 'このページは、まだ <i class="fa fa-flag-o"></i> <b>%s</b> 言語へ翻訳されていません！',
                'NO_FALLBACK_FOUND' => 'フォールバック先の翻訳が見つかりません。',
                'FALLING_BACK' => '<b>%s</b> 言語へフォールバックしています。'
            ],
            'STATE' => [
                'LOADING' => '読み込んでいます…',
                'CREATED_SUCCESSFULLY' => '作成しました',
                'UPDATED_SUCCESSFULLY' => '更新しました',
                'DELETED_SUCCESSFULLY' => '削除しました',
                'EDITING_DRAFT' => '保存済みの下書きを編集中です',
                'NOT_CREATED_YET' => 'このページは保存するまで、存在しません。'
            ],
            'ERROR' => [
                'BAD_DIRECTORY' => 'ディレクトリーの指定が正しくありません',
                'PAGE_NOT_FOUND' => 'ページが見つかりません',
                'PAGE_NOT_EXIST' => '残念！ このページは存在しないようです。',
                'PAGE_FORBIDDEN' => '残念！ あなたはこのページへのアクセス権をもっていないようです。',
                'LAYOUT_NOT_FOUND' => 'Object layout \'%s\' が見つかりません。',
                'BLUEPRINT_NO_LIST' => '<i>%s</i> の Blueprint では、表示用の項目やリストページのオーバーライドが未定義です。',
                'BLUEPRINT_NO_LIST_ADVISE' => 'Blueprint ファイルにリストの項目を追加してください。',
                'BLUEPRINT_NO_LIST_TEMPLATE' => '表示のためのテンプレートファイルを以下のファイル名で作成してください。<b>flex-objects/types/%s/list.html.twig</b>',
                'LIST_EMPTY' => '現在、データがありません。',
                'LIST_EMPTY_ADD' => '現在データがありません。<a href="%s">追加</a> ボタンをクリックして新規作成してください…',
                'NO_FLEX_DIRECTORIES' => 'Flex ディレクトリーが見つかりません。'
            ]
        ]
    ]
];
