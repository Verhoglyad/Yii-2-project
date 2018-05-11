<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\About */

$this->title = 'Create About';
$this->params['breadcrumbs'][] = ['label' => 'Abouts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="about-create">

    <h1>Добавить сотрудника</h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
