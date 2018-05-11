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
    <title><?= Html::encode($this->title) ?></title>

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
                    <p><span><a href="tel:+380980515555">+380 (98) 051 55 55</a></span> <a href="mailto:info@Comfort House.com">info@Comfort House.com</a></p>
                </div>
            </div>
<!--            <div class="col-sm-6 corporate-cart">-->
<!--                <div class="corporate-top-cart">-->
<!--                    <div class="corporate-nav-cart">-->
<!--                        <ul>-->
<!--                            <li><a href="#">LOGIN<span>/</span></a></li>-->
<!--                            <li--><?php //if (!$this->params['cart_count'] == null): ?>
<!--                            class="cart-active"-->
<!--                            --><?php //endif; ?>
<!--                                    id="cart-target"><a href="#" id="getCart">Корзина</a>-->
<!--                                --><?php //if (!$this->params['cart_count'] == null): ?>
<!--                                    <span class="cart_count">--><?php //echo $this->params['cart_count'] ; ?><!--</span></a>-->
<!--                                --><?php //endif; ?>
<!---->
<!--                            </li>-->
<!--                            <li><img src="/assets/images/cart-count-icon-white.png" alt=""></li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
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
            <p class="hidden-xs"><em>Студия дизайна интерьера</em></p>
        </div>



        <!-- Nav Menu -->
        <div class="nav-menu">

            <ul class="nav main-nav right-30">

                <li class="dropdown-toggle nav-toggle" id="link_1" >
                    <a class="scroll" href="<?= \yii\helpers\Url::home() ?>">Главная</a>
                </li>

                <li class="dropdown-toggle nav-toggle" id="link_2" ><a class="scroll" href="<?= \yii\helpers\Url::to(['about/us'])?>">О нас</a>

                    <ul class="dropdown-menu">

                        <li><a href="<?= \yii\helpers\Url::to(['about/us'])?>">О нас</a></li>
                        <li><a href="<?= \yii\helpers\Url::to(['about/service'])?>">Наши услуги</a></li>

                    </ul>

                </li>
                <li class="dropdown-toggle nav-toggle" id="link_3"><a class="scroll" href="<?= \yii\helpers\Url::to(['portfolio/index']) ?>">Портфолио</a>

                </li>
                <li class="dropdown-toggle nav-toggle" id="link_4"><a class="scroll" href="<?= \yii\helpers\Url::to(['shop/index']) ?>">Магазин</a>

                </li>

                <li id="link_5"><a class="scroll" href="<?= \yii\helpers\Url::to(['contact/index']) ?>">Контакты</a></li>

            </ul>

            <div class="top-search">
                <div id="morphsearch" class="morphsearch">
                    <form class="morphsearch-form" action="<?= \yii\helpers\Url::to(['shop/search']) ?>" method="GET">
                        <input class="morphsearch-input" type="search" placeholder="Поиск" name="q"/>
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
                <li class="dropdown-toggle mobile-toggle active"><a href="<?= \yii\helpers\Url::home() ?>">На главную</a>

                </li>
                <li class="dropdown-toggle mobile-toggle"><a class="scroll">О нас</a>

                    <ul class="dropdown-menu dr-mobile">

                        <li><a href="<?= \yii\helpers\Url::to(['about/us'])?>">О нас</a></li>
                        <li><a href="<?= \yii\helpers\Url::to(['about/service'])?>">Наши услуги</a></li>

                    </ul>

                </li>
                <li class="dropdown-toggle nav-toggle"><a class="scroll" href="<?= \yii\helpers\Url::to(['portfolio/index']) ?>">Портфолио</a>

                <li class="dropdown-toggle nav-toggle"><a class="scroll" href="<?= \yii\helpers\Url::to(['shop/index']) ?>">Магазин</a>

                <li><a class="scroll" href="<?= \yii\helpers\Url::to(['contact/index']) ?>">Контакты</a></li>
            </ul>


        </div>





        <div class="clear"></div>

    </div>


</section>
<!-- End Navigation Section -->

<?= $content; ?>

<!-- Footer Top Start -->
<section id="corporate-footer-top">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="footer-top-back">
                    <div class="cp-footer-top-left">
                        <a class="wow fadeInDown" data-wow-delay=".0s" href="corporate-home.html"><img src="/assets/images/logo-white.png" alt=""></a>


                        <p class="wow fadeInDown" data-wow-delay=".1s"><strong><a href="tel:+380980515555">+380 (98) 051 55 55</a></strong></p>
                        <p class="wow fadeInDown" data-wow-delay=".2s"><a href="mailto:">info@Comfort House.com</a></p>
                        <p class="wow fadeInDown" data-wow-delay=".3s">г.Кривой Рог, ул.Мелешкина, 4</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="cp-footer-top-middle">
                    <div class="cp-footer-head">
                        <h3>Быстрые ссылки</h3>
                    </div>

                    <div class="middle-left-cp">
                        <ul>
                            <li class="wow fadeInRight" data-wow-delay=".0s"><a href="<?= \yii\helpers\Url::to(['about/us'])?>"><i class="fa fa-angle-right"></i>О нас</a></li>
                            <li class="wow fadeInRight" data-wow-delay=".1s"><a href="<?= \yii\helpers\Url::to(['about/service'])?>"><i class="fa fa-angle-right"></i>Наши услуги</a></li>
                            <li class="wow fadeInRight" data-wow-delay=".3s"><a href="<?= \yii\helpers\Url::to(['portfolio/index']) ?>"><i class="fa fa-angle-right"></i>Портфолио</a></li>
                            <li class="wow fadeInRight" data-wow-delay=".4s"><a href="<?= \yii\helpers\Url::to(['shop/index']) ?>"><i class="fa fa-angle-right"></i>Магазин</a></li>
                        </ul>
                    </div>
                    <div class="middle-right-cp">
                        <ul>
                            <li class="wow fadeInRight" data-wow-delay=".0s"><a href="#"><i class="fa fa-angle-right"></i>Buyer Support</a></li>
                            <li class="wow fadeInRight" data-wow-delay=".1s"><a href="#"><i class="fa fa-angle-right"></i>Legal Information</a></li>
                            <li class="wow fadeInRight" data-wow-delay=".2s"><a href="#"><i class="fa fa-angle-right"></i>Политика конфиденциальности</a></li>
                            <li class="wow fadeInRight" data-wow-delay=".3s"><a href="#"><i class="fa fa-angle-right"></i>Оплата и доставка</a></li>
                            <li class="wow fadeInRight" data-wow-delay=".4s"><a href="#"><i class="fa fa-angle-right"></i>Partners & Suppliers</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="cp-footer-top-right">
                    <div class="cp-footer-head">
                        <h3>МЫ В СОЦИАЛЬНЫХ СЕТЯХ</h3>
                    </div>
                    <div class="cp-footer-social">
                        <ul>
                            <li class="wow fadeInDown" data-wow-delay=".0s"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="wow fadeInDown" data-wow-delay=".1s"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li class="wow fadeInDown" data-wow-delay=".2s"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="wow fadeInDown" data-wow-delay=".3s"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li class="wow fadeInDown" data-wow-delay=".4s"><a href="#"><i class="fa fa-skype"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Footer Top -->


<!-- Footer Start -->
<section id="corporate-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 corporate-footer-left">
                <p>Comfort House 2018</p>
            </div>

            <div class="col-sm-6 corporate-footer-right">
                <p></p>
            </div>
        </div>
    </div>
</section>
<!--/ End Footer -->

<?php
    \yii\bootstrap\Modal::begin([
            'header' => '<h2>Корзина</h2>',
            'id' => 'cart',
            'size' => 'modal-lg',
            'footer' => "<a type=\'button' class='btn btn-default btn-cart-df' data-dismiss='modal'>Продолжить покупки</a>
                         <a type='button' class='btn btn-danger btn-cart-dn' id='clearCart'>Очистить корзину</a>"
    ]);

    \yii\bootstrap\Modal::end();
?>


<!-- ============ Js Files ============ -->

<!-- Placed at the end of the document so the pages load faster -->

<!-- main js -->


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
