<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="site-error">
    <div class="error-wrapper">
        <h2>Похоже, что такой страницы не существует</h2>
        <a href="<?= \yii\helpers\Url::home() ?>">Вернуться на главную страницу</a>
        <!--    <h1>--><?//= Html::encode($this->title) ?><!--</h1>-->
        <?= Html::img('@web/assets/images/404.gif', ['alt' => '404', 'class' => 'img-responsive' ]) ?>
        <!--    <div class="alert alert-danger">-->
        <!--        --><?//= nl2br(Html::encode($message)) ?>
        <!--    </div>-->
    </div>
</div>
