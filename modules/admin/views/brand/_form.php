<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Brand */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="brand-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <div class="form-group">
        <?= Html::img($model->getImage()->getUrl('100x100')) ?>
    </div>

    <?= $form->field($model, 'image')->fileInput(['accept' => 'image/*', 'id' => 'img']) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-sc']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
