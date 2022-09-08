<?php

namespace api\controllers;


use common\models\Contact;
use Yii;
use yii\rest\ActiveController;


class ContactController  extends ActiveController
{
    public $modelClass = 'common\models\Contact';

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



        return $behaviors;
    }

    public function actions()
    {
        $actions=parent::actions();
        unset($actions['index']);
        unset($actions['view']);
        unset($actions['update']);
        unset($actions['delete']);
        return $actions;
    }

}