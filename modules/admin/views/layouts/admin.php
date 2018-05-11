<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <link rel="shortcut icon" href="/assets/images/service-logo.png">
    <?= Html::csrfMetaTags() ?>
    <title>Админка | <?= Html::encode($this->title) ?></title>

    <!-- Web fonts -->

    <!-- Main css -->

    <?php $this->head() ?>
</head>


<body class="parallax">
<?php $this->beginBody() ?>

<!-- PRELOADER START -->
<div id="preloader">
    <div class="preloader-container">
        <h4 class="preload-logo triggerAnimation animated" data-animate="bounceIn">ComfortHouse</h4>
        <img src="/assets/images/preloader.GIF" class="preload-gif" alt="ComfortHouse">
    </div>
</div>
<!-- PRELOADER END -->

<!-- Corporate Nav Top -->
<section id="nav-top-corporate" class="hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="Corporate-top-left">
                    <p><span><a href="tel:+4105778763452">+41 (0) 57 7876 3452</a></span> <a href="mailto:info@ricochet.com">info@ricochet.com</a></p>
                </div>
            </div>
            <div class="col-sm-6 corporate-cart">
            </div>
        </div>
    </div>
</section>
<!--/ End Corporate Nav Top -->

<!-- Navigation Section -->
<section id="navigation" class="shadow">

    <div class="container inner navigation">

        <!-- Logo Img -->

        <div class="logo">
            <a class="scroll" href="<?= \yii\helpers\Url::home() ?>"><img src="/assets/images/logo.png" alt="Logo"/></a>
            <p class="hidden-xs"><em>Админ панель</em></p>
        </div>



        <!-- Nav Menu -->
        <div class="nav-menu">

            <ul class="nav main-nav right-30">

                <li class="dropdown-toggle nav-toggle">
                    <a class="scroll" href="<?= \yii\helpers\Url::home() ?>">Перейти на сайт</a>
                </li>

<!--                <li class="dropdown-toggle nav-toggle"><a class="scroll" href="#">О нас</a>-->

                </li>
                <li class="dropdown-toggle nav-toggle active"><a class="scroll" href="<?= \yii\helpers\Url::to(['portfolio/index']) ?>">Портфолио</a>
                    <ul class="dropdown-menu">

                        <li><a href="<?= \yii\helpers\Url::to(['portfolio/create']) ?>">Добавить</a></li>
                        <li><a href="<?= \yii\helpers\Url::to(['portfolio/index']) ?>">Список портфолио</a></li>

                    </ul>

                </li>
                <li class="dropdown-toggle nav-toggle"><a class="scroll" href="<?= \yii\helpers\Url::to(['about/index'])?>">Команда</a>

                    <ul class="dropdown-menu">

                        <li><a href="<?= \yii\helpers\Url::to(['about/create'])?>">Добавить</a></li>
                        <li><a href="<?= \yii\helpers\Url::to(['about/index'])?>">Список </a></li>

                    </ul>

                </li>
                <li class="dropdown-toggle nav-toggle"><a class="scroll" href="#">Магазин</a>

                    <ul class="dropdown-menu">
                        <li><a href="<?= \yii\helpers\Url::to(['category/create'])?>">Добавить категорию</a></li>
                        <li><a href="<?= \yii\helpers\Url::to(['category/index']) ?>">Список категорий товаров</a></li>
                        <li><a href="<?= \yii\helpers\Url::to(['product/create'])?>">Добавить товар</a></li>
                        <li><a href="<?= \yii\helpers\Url::to(['product/index']) ?>">Список товаров</a></li>
                        <li><a href="<?= \yii\helpers\Url::to(['brand/create']) ?>">Добавить бренд</a></li>
                        <li><a href="<?= \yii\helpers\Url::to(['brand/index']) ?>">Список брендов</a></li>
<!--                        <li><a href="corporate-shop-detail.html">Shop detail</a></li>-->

                    </ul>

                </li>

                <li class="dropdown-toggle nav-toggle"><a class="scroll" href="<?= \yii\helpers\Url::to(['partners/index']) ?>">Партнёры</a>
                    <ul class="dropdown-menu">

                        <li><a href="<?= \yii\helpers\Url::to(['partners/create']) ?>">Добавить</a></li>
                        <li><a href="<?= \yii\helpers\Url::to(['partners/index']) ?>">Список партнёров</a></li>

                    </ul>

                </li>

                <li><a class="scroll" href="<?= \yii\helpers\Url::to(['/site/logout']) ?>">Выйти</a></li>

            </ul>

            <div class="top-search">
                <div id="morphsearch" class="morphsearch">
                    <form class="morphsearch-form">
                        <input class="morphsearch-input" type="search" placeholder="Search"/>
                        <i class="fa fa-search morph-icon"></i>
                        <button class="morphsearch-submit" type="submit"></button>
                    </form>
                    <!-- /morphsearch-content -->
                    <span class="morphsearch-close"></span>
                </div>

            </div>



        </div>




        <!-- Dropdown Menu For Mobile Devices-->

        <div class="dropdown mobile-drop">
            <a data-toggle="dropdown" class="mobile-menu" href="#"><i class="fa fa-bars"></i></a>

            <ul class="nav dropdown-menu extra fullwidth" role="menu" >
                <li class="dropdown-toggle mobile-toggle active"><a class="scroll">Home</a>

                    <ul class="dropdown-menu dr-mobile">

                        <li><a href="corporate-home.html">Home 1</a></li>
                        <li class="active"><a href="corporate-home-2.html">Home 2</a></li>

                    </ul>

                </li>
                <li class="dropdown-toggle mobile-toggle"><a class="scroll">about</a>

                    <ul class="dropdown-menu dr-mobile">

                        <li><a href="corporate-about-us.html">About us</a></li>
                        <li><a href="corporate-services.html">our services</a></li>

                    </ul>

                </li>
                <li class="dropdown-toggle mobile-toggle"><a class="scroll">portfolio</a>

                    <ul class="dropdown-menu dr-mobile">

                        <li><a href="corporate-portfolio.html">portfolio</a></li>
                        <li><a href="corporate-portfolio-two.html">portfolio 2</a></li>
                        <li><a href="corporate-portfolio-single.html">portfolio single</a></li>

                    </ul>

                </li>
                <li class="dropdown-toggle mobile-toggle"><a class="scroll">news</a>

                    <ul class="dropdown-menu dr-mobile">

                        <li><a href="corporate-blog.html">Blog</a></li>
                        <li><a href="corporate-blog-single.html">Blog single</a></li>


                    </ul>

                </li>

                <li><a class="scroll" href="corporate-contact.html">Выйти из админ панели</a></li>
            </ul>


        </div>





        <div class="clear"></div>

    </div>


</section>
<!-- End Navigation Section -->


<div class="container">
    <?= $content; ?>
</div>


<!-- ============ Js Files ============ -->

<!-- Placed at the end of the document so the pages load faster -->

<!-- main js -->


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
