<?php

use PhpParser\Node\Stmt\Expression;

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',

    // Beberapa Applications Properties | Dokumentasi : https://www.yiiframework.com/doc/guide/2.0/en/structure-applications
    'name' => 'Zuma Application',        // Mengatur nama aplikasi, defaultnya "My Application"
    // 'language' => 'ind',                 // mengatur bahasa yang digunakan
    // 'defaultRoute' => 'site/login',      // mengatur Route Defaultnya

    /*
    // Kita juga bisa menambahkan beberapa Application Event, seperti eventListener pada JS
    'on beforeRequest' => function($event) {
        echo"<h1><br><br>" . var_dump("Ini adalah event sebelum request") . "</h1>";
    },
    */

    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'qf6aIy6rqwVNPQa_G4PCqkYFOPcc-uab',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => \yii\symfonymailer\Mailer::class,
            'viewPath' => '@app/mail',
            // send all mails to a file by default.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,
        
        // URL MANAGER
        'urlManager' => [
            'enablePrettyUrl' => true,      // Ini akan membuat url menjadi bersih (Preatty Url)
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
