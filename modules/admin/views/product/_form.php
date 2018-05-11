<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">
    <?php $img = $model->getImage() ?>
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

<!--    --><?//= $form->field($model, 'category_id')->textInput() ?>
    <div class="form-group field-product-category_id required">
        <label class="control-label" for="product-category_id">Категория</label>
        <select id="product-category_id" class="form-control" name="Product[category_id]" aria-required="true">
            <?= \app\components\MenuWidget::widget(['templ' => 'select_product', 'model' => $model]) ?>
        </select>
    </div>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <img class="img-preview" id="img-preview" src="<?= $img->getUrl('100x100') ?>" />
    </div>

    <?= $form->field($model, 'image')->fileInput(['accept' => 'image/*', 'id' => 'img']) ?>

    <?= $form->field($model, 'gallery[]')->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>

    <div class="form-group">
        <a class="btn-cart-df" href="<?= \yii\helpers\Url::to(['product/download']) ?>">Скачать шаблон PSD</a>
        <a class="btn-cart-dn" href="<?= \yii\helpers\Url::to(['product/delete-all-images', 'id' => $model->id]) ?>">Удалить все фото</a>
    </div>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'old_price')->textInput() ?>

    <?= $form->field($model, 'tags')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hit')->checkbox([ '0', '1', ]) ?>

    <?= $form->field($model, 'sale')->checkbox([ '0', '1', ]) ?>

    <?= $form->field($model, 'main')->checkbox([ '0', '1', ]) ?>

    <?= $form->field($model, 'main_mid')->checkbox([ '0', '1', ]) ?>

    <?= $form->field($model, 'discount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'material')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'style')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'brand')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dimension')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-sc']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
