<?php
return [
    'language' => 'uz',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'i18n' => [
            'translations' => [
                'main*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@frontend/messages',
                    'sourceLanguage' => 'uz',
                    'fileMap' => [
                        'main' => 'main.php',
                    ]
                ]
            ]
        ]
    ],
    'timeZone' => 'Asia/Tashkent'
];
