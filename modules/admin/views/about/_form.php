<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\About */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="about-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'position')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::img($model->getImage()->getUrl('100x100')) ?>
    </div>

    <?= $form->field($model, 'image')->fileInput() ?>

<!--    --><?//= $form->field($model, 'category')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'category')->dropDownList([
        'designer' => 'Дизайнер',
        'director' => 'Директор',
    ]); ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-sc']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
