<?php


namespace backend\controllers;


use common\models\User;
use mdm\admin\models\form\ChangePassword;
use Yii;
use yii\base\Controller;
use yii\filters\VerbFilter;

class UserController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    public function actionProfile(){
        $model = User::findOne(Yii::$app->user->getId());

        if ($model->load(Yii::$app->getRequest()->post()) && $model->save()) {
            Yii::$app->session->setFlash('success1', "The change was saved successfully.");
            return Yii::$app->response->redirect(['/user/profile']);
        }

        return $this->render('profile', [
            'model' => $model
        ]);
    }

    public function actionSecurity(){
        $model = new ChangePassword();
        if ($model->load(Yii::$app->getRequest()->post()) && $model->change()) {
            return $this->response->redirect(Yii::$app->getHomeUrl());
        }

        return $this->render('security', [
            'model' => $model,
        ]);
    }

}
