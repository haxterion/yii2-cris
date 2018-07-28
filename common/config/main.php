<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
        '@mdm/admin' => '@vendor/mdmsoft',

    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'modules' => [
        'admin' => [
            'class' => 'mdm\admin\Module',
        ],
    ],
    'components' => [
        'formatter' => [
               'class' => 'yii\i18n\Formatter',
               'dateFormat' => 'd-M-Y',
               'datetimeFormat' => 'Y-MM-d H:i:s',
               'timeFormat' => 'H:i:s', 
               'locale' => 'id-ID', //your language locale
               'defaultTimeZone' => 'UTC', // time zone  
               'timeZone' => 'Asia/Jakarta',
               'thousandSeparator' => ',',
               'decimalSeparator' => '.',
               'currencyCode' => '$'
           ],        
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
             // or use 'yii\rbac\DbManager'
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
    'as access' => [
        'class' => 'mdm\admin\components\AccessControl',
        'allowActions' => [
            // 'admin/*',
            'site/signup',
            'site/login',
            'site/logout',
            ]
    ],
];
