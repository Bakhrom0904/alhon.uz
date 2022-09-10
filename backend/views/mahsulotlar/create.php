<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Mahsulotlar $model */

$this->title = 'Create Mahsulotlar';
$this->params['breadcrumbs'][] = ['label' => 'Mahsulotlars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mahsulotlar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
