<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Partners */

$this->title = 'Create Partners';
$this->params['breadcrumbs'][] = ['label' => 'Partners', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="partners-create">

    <h1>Добавить партнёра</h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
