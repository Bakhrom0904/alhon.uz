<?php
namespace api\controllers;
use api\controllers\UniversalController;
use api\models\Mahsulotlar;
use yii\data\ActiveDataProvider;

class MahsulotlarController  extends UniversalController
{
    public $modelClass = 'api\models\Mahsulotlar';

    public function actions()
    {
        $actions=parent::actions();
        unset($actions['index']);
        return $actions;
    }

    public function actionIndex()
    {
        $dataProvider=new ActiveDataProvider([
            'query' => Mahsulotlar::find(),
        ]);
        return $dataProvider;
    }
}