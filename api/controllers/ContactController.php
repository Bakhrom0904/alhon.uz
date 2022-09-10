<?php

namespace api\controllers;


use common\models\Contact;
use Yii;
use yii\rest\ActiveController;
use yii\web\Response;


class ContactController  extends ActiveController
{
    public $modelClass = 'common\models\Contact';

    public function behaviors()
    {
        $behaviors = parent::behaviors();

        // add CORS filter
        $behaviors['corsFilter'] = [
            'class' => \yii\filters\Cors::class,
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