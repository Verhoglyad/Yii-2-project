<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Команда';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="about-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить сотрудника', ['create'], ['class' => 'btn btn-sc']) ?>
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
            'name',
            'position',
//            'text:ntext',
//            'category',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
