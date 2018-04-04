<?php
/**
 * @link http://www.tintsoft.com/
 * @copyright Copyright (c) 2012 TintSoft Technology Co. Ltd.
 * @license http://www.tintsoft.com/license/
 */
return array_merge(
    [
        'GET /' => 'site/index',
        'GET location' => 'site/location',
    ],
    require(__DIR__ . '/../modules/v1/router.php')
);