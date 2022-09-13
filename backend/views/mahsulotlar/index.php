<?php

use common\models\Mahsulotlar;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\MahsulotlarSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Jahon talabidagi mahsulotlar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mahsulotlar-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Mahsulot qoshish', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            [
                'attribute' => 'foto',
                'format' => 'html',
                'value' => function ($model) {
                    return Html::img(Yii::getAlias('@web').'/rasmlar/'. $model['foto'],
                        ['width' => '80px']);
                },
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Mahsulotlar $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
