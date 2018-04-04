<?php
return [
    'language' => 'zh-CN',
    'sourceLanguage' => 'en-US',
    'timeZone' => 'PRC',
    'name' => 'YUNCMS',
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'i18n' => require(__DIR__ . '/i18n.php'),
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'redis' => [
            'class' => 'yii\redis\Connection',
            'hostname' => '192.168.10.111',
            'port' => 32768,
            //'password' => '',
            'database' => 0,
            'retries' => 1
        ],
        'queue' => [
            'class' => 'yii\queue\file\Queue',
        ],
    ],
];
