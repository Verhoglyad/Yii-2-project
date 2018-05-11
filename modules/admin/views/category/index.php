<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    <h1>Категории товаров</h1>

    <p>
        <?= Html::a('Добавить категорию', ['create'], ['class' => 'btn btn-sc']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
//            'parent_id',
            [
                'attribute' => 'image',
                'value' => function($data){
                    $img = $data->getImage();
                    return "<img src='{$img->getUrl('100x100')}'>";
                },
                'format' => 'html'
            ],
            [
                'attribute' => 'parent_id',
                'value' => function($data){
                    return $data->category->name ? $data->category->name : 'Главная категория';
                }
            ],
            'name',
            'description',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
