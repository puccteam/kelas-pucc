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

        // url ini untk mengakses backend dari frontend        
        'urlManagerBackEnd' => [
            'class' => 'yii\web\urlManager',
            'baseUrl' => '/dashboard',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [                  
                'profile/<id:[0-9a-zA-Z\-]+>/?' => 'profile/user',
                'category/<id:\S+>' => 'category/detail',  
                '<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
                'request-password-reset' => 'site/request-password-reset',
                'reset-password/<token:\S+>' => 'site/reset-password',  
                'logout' => 'site/logout',
                'login' => 'site/login',
            ]
        ],
        // url ini untk mengakses frontend dari backend
        'urlManagerFrontEnd' => [
            'class' => 'yii\web\urlManager',
            'baseUrl' => '',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [                  
                'profile/<id:[0-9a-zA-Z\-]+>/?' => 'profile/user',
                'category/<id:\S+>' => 'category/detail',  
                '<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
                'request-password-reset' => 'site/request-password-reset',
                'reset-password/<token:\S+>' => 'site/reset-password',  
                'logout' => 'site/logout',
                'login' => 'site/login',
            ]
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
            //'*', // only in dev mode
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

     'controllerMap' => [
        'file' => 'mdm\upload\FileController', // use to show or download file
    ],
];
