<?php

use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model \mdm\admin\models\form\ChangePassword */

$this->title = Yii::t('app', Yii::t('app', 'User profile'));
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-profile mt-5">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-lg-5">
            <?php if (Yii::$app->session->hasFlash('success1')): ?>
                <div class="alert alert-success alert-dismissable">
                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                    <h4><i class="icon fa fa-check"></i><?= Yii::t('app', 'Saved!')?></h4>
                    <?= Yii::$app->session->getFlash('success1') ?>
                </div>
            <?php endif; ?>
            <?php $form = ActiveForm::begin(['id' => 'form-profile']); ?>
            <?= $form->field($model, 'fullname')->textInput()->label(Yii::t('app', 'Fullname')) ?>
            <?= $form->field($model, 'phone')->textInput()->label(Yii::t('app', 'Phone number')) ?>
            <?= $form->field($model, 'email')->textInput()->label(Yii::t('app', 'Email')) ?>
            <div class="form-group">
                <?= Html::submitButton(Yii::t('app', 'Change'), ['class' => 'btn btn-primary', 'name' => 'change-button']) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
