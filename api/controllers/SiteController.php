<?php

namespace api\controllers;

use Yii;
use yii\web\Response;
use yii\rest\Controller;
use yii\base\Exception;
use yii\web\HttpException;
use yii\base\ErrorException;

/**
 * Class SiteController
 * @package api
 */
class SiteController extends Controller
{
    /**
     * @return array
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yuncms\rest\ErrorAction'
            ],
        ];
    }

    /**
     * Display welcome
     * @return string
     */
    public function actionIndex()
    {
        Yii::$app->response->format = Response::FORMAT_RAW;
        return 'Welcome to the API interface.';
    }
}
