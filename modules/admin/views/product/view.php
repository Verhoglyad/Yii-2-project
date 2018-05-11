<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Product */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php if( Yii::$app->session->hasFlash('success') ): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo Yii::$app->session->getFlash('success'); ?>
        </div>
    <?php endif;?>

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-pm']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-dn',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <?php $img = $model->getImage();?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
//            'id',
//            'category_id',
            [
                'attribute' => 'category_id',
                'value' => $model->category->category->name . " | " . $model->category->name
            ],
            'name',
            [
                'attribute' => 'image',
                'value' => "<img src='{$img->getUrl('x100')}'>",
                'format' => 'html',
            ],
            'content:ntext',
            'price',
            'old_price',
            'tags',
//            'hit',
//            'sale',
//            'main',
//            'main_mid',
            [
                'attribute' => 'hit',
                'value' => !$model->hit ? '<span class="text-danger glyphicon glyphicon-remove"></span>' : '<span class="text-success glyphicon glyphicon-ok"></span>',
                'format' => 'html'
            ],
            [
                'attribute' => 'sale',
                'value' => !$model->sale ? '<span class="text-danger glyphicon glyphicon-remove"></span>' : '<span class="text-success glyphicon glyphicon-ok"></span>',
                'format' => 'html'
            ],
            [
                'attribute' => 'main',
                'value' => !$model->main ? '<span class="text-danger glyphicon glyphicon-remove"></span>' : '<span class="text-success glyphicon glyphicon-ok"></span>',
                'format' => 'html'
            ],
            [
                'attribute' => 'main_mid',
                'value' => !$model->main_mid ? '<span class="text-danger glyphicon glyphicon-remove"></span>' : '<span class="text-success glyphicon glyphicon-ok"></span>',
                'format' => 'html'
            ],

            'discount',
            'material',
            'style',
            'brand',
            'dimension',
        ],
    ]) ?>

</div>
