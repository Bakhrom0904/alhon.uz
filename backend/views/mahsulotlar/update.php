<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Mahsulotlar $model */

$this->title = 'Mahsulotni yangilash';
$this->params['breadcrumbs'][] = ['label' => 'Mahsulotlars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mahsulotlar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
