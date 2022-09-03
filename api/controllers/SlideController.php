<?php

namespace api\controllers;

use common\models\Slide;
use yii\data\ActiveDataProvider;
use yii\rest\ActiveController;

class SlideController extends UniversalController
{
    public $modelClass = 'common\models\Slide';

    public function actions()
    {
        $actions=parent::actions();
        unset($actions['index']);
        return $actions;
    }

    public function actionIndex()
    {
        $dataProvider=new ActiveDataProvider([
            'query'=>Slide::find(),
        ]);
        return $dataProvider;
    }
}