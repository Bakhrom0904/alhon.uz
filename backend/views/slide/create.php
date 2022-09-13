<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Slide $model */

$this->title = 'Slide qoshish';
$this->params['breadcrumbs'][] = ['label' => 'Slides', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="slide-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
