<?php
namespace api\controllers;
use api\models\Products;
use yii\data\ActiveDataProvider;
use api\controllers\UniversalController;

class ProductsController  extends UniversalController
{
    public $modelClass = 'api\models\Products';

    public function actions()
    {
        $actions=parent::actions();
        unset($actions['index']);
        return $actions;
    }

    public function actionIndex()
    {
        $dataProvider=new ActiveDataProvider([
            'query' => Products::find(),
        ]);
        return $dataProvider;
    }
}