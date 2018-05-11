<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Портфолио';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="portfolio-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить проект', ['create'], ['class' => 'btn btn-sc']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            [
                'attribute' => 'image',
                'value' => function($data){
                    $img = $data->getImage();
                    return "<img src='{$img->getUrl('100x100')}'>";
                },
                'format' => 'html'
            ],
            'category_id',
            'title',
//            'text:ntext',
//            'client',
//            'date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
