<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'authManager' => [
            'class' => 'yii\rbac\DbManager', // only support DbManager
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],

        'pengaturan' => [
            'class' => 'common\componen\Pengaturan',
        ],
        'menu' => [
            'class' => 'common\componen\Menu',
        ],
        
    ],
    'as access' => [
        'class' => '\hscstudio\mimin\components\AccessControl',
        'allowActions' => [
            // add wildcard allowed action here!
            // '*',
            'site/*',
            'debug/*',
            'mimin/*', // only in dev mode
        ],
    ],
    'modules' => [
        'mimin' => [
            'class' => '\hscstudio\mimin\Module',
        ],
    ],
];
