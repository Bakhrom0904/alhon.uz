<?php

namespace api\controllers;

use yii\rest\Controller;
use yii\web\Response;

class UniversalController extends Controller
{
    public function behaviors()
    {
        $behaviors = parent::behaviors();

        // add CORS filter
        $behaviors['corsFilter'] = [
            'class' => \yii\filters\Cors::class,
            'cors' => [
//                // restrict access to
                'Origin' => [
                    '*'
                ],
            ],
        ];


        $behaviors['formats'] = [
            'class' => 'yii\filters\ContentNegotiator',
            'formats' => [
                'application/json' => Response::FORMAT_JSON,
            ],
        ];

        return $behaviors;
    }
}