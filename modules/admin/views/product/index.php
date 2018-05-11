<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1>Товары</h1>

    <p>
        <?= Html::a('Добавить', ['create'], ['class' => 'btn btn-sc']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
//            'category_id',
            [
                'attribute' => 'image',
                'value' => function($data){
                    $img = $data->getImage();
                    return "<img src='{$img->getUrl('100x100')}'>";
                },
                'format' => 'html'
            ],
            [
                'attribute' => 'category_id',
                'value' => function($data){
                    return $data->category->category->name . " | " . $data->category->name;
                }
            ],
            'name',
//            'content:ntext',
            'price',
            //'old_price',
            //'tags',
//            'hit',
//            'sale',
//            'main',
//            'main_mid',
            [
                'attribute' => 'hit',
                'value' => function($data){
                    return !$data->hit ? '<span class="text-danger glyphicon glyphicon-remove"></span>' : '<span class="text-success glyphicon glyphicon-ok"></span>';
                },
                'format' => 'html'
            ],
            [
                'attribute' => 'sale',
                'value' => function($data){
                    return !$data->sale ? '<span class="text-danger glyphicon glyphicon-remove"></span>' : '<span class="text-success glyphicon glyphicon-ok"></span>';
                },
                'format' => 'html'
            ],
            [
                'attribute' => 'main',
                'value' => function($data){
                    return !$data->main ? '<span class="text-danger glyphicon glyphicon-remove"></span>' : '<span class="text-success glyphicon glyphicon-ok"></span>';
                },
                'format' => 'html'
            ],
            [
                'attribute' => 'main_mid',
                'value' => function($data){
                    return !$data->main_mid ? '<span class="text-danger glyphicon glyphicon-remove"></span>' : '<span class="text-success glyphicon glyphicon-ok"></span>';
                },
                'format' => 'html'
            ],
            //'discount',
            //'material',
            //'style',
            //'brand',
            //'dimension',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
