<?php

namespace api\controllers;

use api\models\Slide;
use yii\data\ActiveDataProvider;
use api\controllers\UniversalController;

class SlideController extends UniversalController
{
    public $modelClass = 'api\models\Slide';

    public function actions()
    {
        $actions=parent::actions();
        unset($actions['index']);
        return $actions;
    }

    public function actionIndex()
    {
        $dataProvider=new ActiveDataProvider([
            'query' => Slide::find(),
        ]);
        return $dataProvider;
    }
}