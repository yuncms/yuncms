<?php
/**
 * @link http://www.tintsoft.com/
 * @copyright Copyright (c) 2012 TintSoft Technology Co. Ltd.
 * @license http://www.tintsoft.com/license/
 */
return [
    'translations' => [
        '*' => [
            'class' => 'yii\i18n\PhpMessageSource',
            //'basePath' => '@app/messages',
            'sourceLanguage' => 'en-US',
            'fileMap' => [
                'app' => 'app.php',
                'app/error' => 'error.php',
            ],
        ],
    ],
];