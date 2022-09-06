<?php


use yii\bootstrap5\ActiveForm;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap5\ActiveForm */
/* @var $model \mdm\admin\models\form\ChangePassword */

$this->title = Yii::t('app', Yii::t('app', 'Change Password'));
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-security  mt-5">
    <h1><?= Html::encode($this->title) ?></h1>

    <p><?=Yii::t('app', 'Please fill out the following fields to change password:')?></p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-change']); ?>
            <?= $form->field($model, 'oldPassword')->passwordInput()->label(Yii::t('app', 'Old password')) ?>
            <?= $form->field($model, 'newPassword')->passwordInput()->label(Yii::t('app', 'New password')) ?>
            <?= $form->field($model, 'retypePassword')->passwordInput()->label(Yii::t('app', 'Retype password')) ?>
            <div class="form-group">
                <?= Html::submitButton(Yii::t('app', 'Change'), ['class' => 'btn btn-primary', 'name' => 'change-button']) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
