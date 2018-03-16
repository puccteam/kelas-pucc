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

        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-common', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-common',
        ],
        
    ],
    'as access' => [
        'class' => '\hscstudio\mimin\components\AccessControl',
        'allowActions' => [
            // add wildcard allowed action here!
            // '*', // only in dev mode
            'gii/*', // only in dev mode
            'site/*',
            'debug/*', 
            'mimin/*', // only in dev mode
        ],
    ],
    'modules' => [
        'mimin' => [
            'class' => '\hscstudio\mimin\Module',
        ],

        'gridview' => ['class' => 'kartik\grid\Module']
    ],
];
