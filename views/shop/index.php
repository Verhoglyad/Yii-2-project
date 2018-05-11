<!-- Slider Content -->
<input type="hidden" value="4" id="pageId">
<section id="corporate-shop-home">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php $mainImage = $main->getImage() ?>
                <?php $gallery = $main->getImages() ?>
                <div class="cp-home-slider-content-1" style="background-image: url(<?= $mainImage->getUrl() ?>)">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="shop-home-left">
                                <a class="wow fadeInDown" data-wow-delay=".0s" href="<?= \yii\helpers\Url::to(['shop/list', 'id' => $main->id]) ?>">Перейти в каталог</a>
                                <h2 class="wow fadeInDown" data-wow-delay=".1s"><?= $main->name ?></h2>
                                <h4 class="wow fadeInDown" data-wow-delay=".2s"><span><?= $main->discount ?></span></h4>
                                <p class="wow fadeInDown" data-wow-delay=".3s">
                                    <?php
                                    $string = substr($main->content, 0, 150);
                                    $string = rtrim($string, "!,.-");
                                    $string = substr($string, 0, strrpos($string, ' '));
                                    echo $string."… ";
                                    ?>
                                </p>
                            </div>
                        </div>

                        <div class="pull-right col-sm-5">
                            <div class="shop-home-right">
                                <p class="wow fadeInDown" data-wow-delay=".0s"><span><?= $main->price ?> грн</span></p>
                                <div class="home-item wow fadeInDown" data-wow-delay=".1s">
                                    <?php $i=0; foreach ($gallery as $img): ?>
                                        <?= \yii\helpers\Html::img($img->getUrl('68x68')) ?>

                                    <?php if ($i == 1): ?>
                                </div>
                                <div class="home-item wow fadeInDown" data-wow-delay=".2s">
                                    <?php endif; ?>

                                    <?php $i++; if ($i == 4) break ?>
                                    <?php endforeach; ?>
                                </div>

                                <div class="shop-home-link wow fadeInDown" data-wow-delay=".3s">
                                    <a href="<?= \yii\helpers\Url::to(['shop/detail', 'id' => $main->id]) ?>">Подробнее</a>
                                    <?php if (!isset($session['cart'][$main->id])): ?>
                                        <a href="" class="add-to-cart" role="button" data-id="<?= $main->id ?>">Добавить в корзину</a>
                                    <?php else: ?>
                                        <a href="" class=" btn btn-default del-item active " role="button" data-id="<?= $main->id ?>">Удалить из корзины</a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>
<!--/ End Slider Content -->

<!-- Corporate Home Services -->
<section id="cp-services">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="cp-shop-header">
                    <h2><span>Категории</span></h2>
                </div>
            </div>
        </div>
        <div class="row cp-service-row">
            <div class="shop-service">
                <?php $i = 1; foreach ($category as $cat):?>
                <?php $mainImage = $cat->getImage(); ?>
                <?php if ($cat['parent_id'] == 0): ?>
                <div>
                    <div class="cp-services-main">
                        <a href="<?= \yii\helpers\Url::to(['shop/list', 'id' => $cat['id'], 'all' => 1]) ?>">
                            <?= \yii\helpers\Html::img($mainImage->getUrl('360x226'), ['class' => 'img-responsive']) ?>
                        </a>

                        <div class="service-img-bottom">
                            <div class="service-number">
                                <p>0<?= $i ?></p>
                            </div>
                            <div class="number-head">
                                <h3><a href="<?= \yii\helpers\Url::to(['shop/list', 'id' => $cat['id'], 'all' => 1]) ?>"><?= $cat->name ?></a></h3>
                                <p><?= $cat->description ?></p>
                            </div>
                        </div>

                    </div>
                </div>
                <?php $i++; endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<!--/ End Corporate Home Services -->


<!-- Section Start -->
<section id="feature" class="cp-shop-feature">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 feature-left-content">
                <div class="shop-item-details">
                    <div class="page-header-1">
                        <h1><?= $main_mid->name ?></h1>

                        <div class="custom-border">
                            <div class="custom-border-1"></div>
                        </div>
                    </div>

                    <div class="detail-content">
                        <div class="rating">
                            <ul>
                                <?php if ($main_mid->sale == 1): ?>
                                    <li class="rating-price wow fadeInRight" data-wow-delay=".0s"><del>$<?= $main_mid->old_price ?></del> <span>$<?= $main_mid->price ?></span></li>
                                <?php else: ?>
                                    <li class="rating-price wow fadeInRight" data-wow-delay=".0s"><span>$<?= $main_mid->price ?></span></li>
                                <?php endif; ?>
                            </ul>
                        </div>
                        <div class="item-description">
                            <ul>
                                <li class="wow fadeInRight" data-wow-delay=".1s">
                                    <i class="fa fa-circle-thin"></i>
                                    <span>Материал:</span>
                                    <?= $main_mid->material ?>
                                </li>
                                <li class="wow fadeInRight" data-wow-delay=".2s">
                                    <i class="fa fa-circle-thin"></i>
                                    <span>Стиль:</span>
                                    <?= $main_mid->style ?>
                                </li>
                                <li class="wow fadeInRight" data-wow-delay=".3s">
                                    <i class="fa fa-circle-thin"></i>
                                    <span>Бренд:</span>
                                    <?= $main_mid->brand ?>
                                </li>
                                <li class="wow fadeInRight" data-wow-delay=".4s">
                                    <i class="fa fa-circle-thin"></i>
                                    <span>Размеры:</span>
                                    <?= $main_mid->dimension ?>
                                </li>
                            </ul>
                        </div>

                        <p class="bot wow fadeInRight" data-wow-delay=".4s">
                            <?php
                            $string = substr($main_mid->content, 0, 250);
                            $string = rtrim($string, "!,.-");
                            $string = substr($string, 0, strrpos($string, ' '));
                            echo $string."… ";
                            ?>
                        </p>


                        <div class="shop-home-link">
                            <?php if (!isset($session['cart'][$main_mid->id])): ?>
                                <a href="" class="btn btn-default add-to-cart" role="button" data-id="<?= $main_mid->id ?>">Добавить в корзину</a>
                            <?php else: ?>
                                <a href="" class="btn btn-default active del-item" role="button" data-id="<?= $main_mid->id ?>">Удалить из корзины</a>
                            <?php endif; ?>
                        </div>


                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="">
                    <?php $main_mid_img = $main_mid->getImage() ?>
                    <?= \yii\helpers\Html::img($main_mid_img->getUrl(), ['class' => 'img-responsive']) ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Testimonial Section -->

<!-- CP Subscribe Section -->
<section id="from-shop">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="cp-shop-header">
                    <h2><span>FROM THE SHOP</span></h2>
                </div>
            </div>
        </div>
        <!-- Shop Item First Row -->
        <div class="row custom-15">
            <?php if (!empty($products)): ?>
            <?php foreach ($products as $product): ?>
                <?php $mainImage = $product->getImage() ?>
            <!-- Shop Item One -->
            <div class="col-sm-3">
                <div class="thumbnail light-grey">
                    <div class="shop-item-figure">
                        <a href="<?= \yii\helpers\Url::to(['shop/detail', 'id' => $product->id]) ?>"><?= \yii\helpers\Html::img($mainImage->getUrl('600x500')) ?></a>
                        <?php if ($product->sale == 1): ?>
                            <div class="item-sale">
                                <P>Sale!</P>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="caption">

                        <h2><a href="<?= \yii\helpers\Url::to(['shop/detail', 'id' => $product->id]) ?>"><?= $product->name ?></a></h2>
                        <?php if ($product->sale == 1): ?>
                            <p><span><del>$<?= $product->old_price ?></del></span> $<?= $product->price ?></p>
                        <?php else: ?>
                            <h5>$<?= $product->price ?></h5>
                        <?php endif; ?>

                        <?php if (!isset($session['cart'][$product->id])): ?>
                            <p><a href="" class="btn btn-default add-to-cart" role="button" data-id="<?= $product->id ?>">Добавить в корзину</a></p>
                        <?php else: ?>
                            <p><a href="" class="btn btn-default active del-item" role="button" data-id="<?= $product->id ?>">Удалить из корзины</a></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <!--/ End Shop Item One -->
                <?php endforeach; ?>
            <?php else: ?>
                <h1>В этой категории товаров временно нет...</h1>
            <?php endif; ?>

        </div>
        <!--/ End Shop Item First Row -->
    </div>
</section>
<!--/ End CP Subscribe Section -->

<!-- Shop Subscription Section -->
<section id="shop-subscription">
    <div class="container">
        <div class="row shop-subscription-row">
            <!-- First Column -->
            <div class="col-sm-3">
                <div class="onsale-left">
                    <div class="sidebar-box">
                        <h3>newslettter subscribe</h3>

                        <div class="shop-newsletter h-35 wow fadeInDown">
                            <p>
                                Subscribe to our newsletter feed to get
                                notified about latest sale offers and new
                            </p>
                            <div class="input-group">
                                <input type="email" class="form-control" placeholder="Enter Your Email..." aria-describedby="basic-addon2">
                                <span class="input-group-addon" id="basic-addon2"><i class="fa fa-envelope-o"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Second Column -->
            <div class="col-sm-3 shop-home-1">
                <div class="onsale-left">
                    <div class="sidebar-box">
                        <h3>Самые популярные</h3>
                        <?php $i=0; foreach ($hits as $hit): ?>
                        <?php $img = $hit->getImage() ?>
                        <div class="onsale-cart-image wow fadeInDown" data-wow-delay=".0<?= $i ?>">
                            <a href="<?= \yii\helpers\Url::to(['shop/detail', 'id' => $hit->id]) ?>"><?= \yii\helpers\Html::img($img->getUrl('77x78')) ?></a>
                            <div class="onsale-cart-content">
                                <h6><a href="<?= \yii\helpers\Url::to(['shop/detail', 'id' => $hit->id]) ?>"><?= $hit->name ?></a></h6>
                                <p><span>$<?= $hit->price ?></span></p>
                            </div>
                        </div>
                        <?php $i++; endforeach; ?>
                    </div>
                </div>
            </div>

            <!-- Third Column -->
            <div class="col-sm-3">
                <div class="onsale-left">
                    <div class="sidebar-box">
                        <h3>Скидка</h3>
                        <?php foreach ($sale as $item): ?>
                            <?php $img = $item->getImage() ?>
                        <div class="onsale-cart-image wow fadeInDown" data-wow-delay=".0s">
                            <a href="<?= \yii\helpers\Url::to(['shop/detail', 'id' => $item->id]) ?>"><?= \yii\helpers\Html::img($img->getUrl('77x78')) ?></a>
                            <div class="onsale-cart-content">
                                <h6><a href="<?= \yii\helpers\Url::to(['shop/detail', 'id' => $item->id]) ?>"><?= $item->name ?></a></h6>
                                <p> <del> $<?= $item->old_price ?> </del> <span>$<?= $item->price ?></span></p>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <!-- Fourth Column -->
<!--            <div class="col-sm-3">-->
<!--                <div class="onsale-left">-->
<!--                    <div class="sidebar-box">-->
<!--                        <h3>BEST RATED</h3>-->
<!---->
<!--                        <div class="onsale-cart-image wow fadeInDown" data-wow-delay=".0s">-->
<!--                            <img src="/assets/images/shop/left-cart-1.jpg" alt="">-->
<!--                            <div class="onsale-cart-content">-->
<!--                                <h6><a href="#">Blue Retro Sofa</a></h6>-->
<!--                                <p><img src="/assets/images/shop/star.png" alt=""></p>-->
<!--                            </div>-->
<!--                        </div>-->
<!---->
<!--                        <div class="onsale-cart-image wow fadeInDown" data-wow-delay=".1s">-->
<!--                            <img src="/assets/images/shop/left-cart-2.jpg" alt="">-->
<!--                            <div class="onsale-cart-content">-->
<!--                                <h6><a href="#">Red Couch</a></h6>-->
<!--                                <p><img src="/assets/images/shop/star.png" alt=""></p>-->
<!--                            </div>-->
<!--                        </div>-->
<!---->
<!--                        <div class="onsale-cart-image wow fadeInDown" data-wow-delay=".2s">-->
<!--                            <img src="/assets/images/shop/left-cart-3.jpg" alt="">-->
<!--                            <div class="onsale-cart-content">-->
<!--                                <h6><a href="#">Living Room Set</a></h6>-->
<!--                                <p><img src="/assets/images/shop/star.png" alt=""></p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
        </div>
    </div>
</section>
<!--/ End Shop Subscription Section -->

<!-- Partners Section -->
<section id="partner-slide">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="cp-page-header">
                    <h2>Brands</h2>
                    <p>Materials & Furniture Supplier Partners</p>
                    <img src="/assets/images/header-bottom.png" alt="">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="partner-logo">
                    <?php foreach ($brand as $b): ?>
                    <?php $img = $b->getImage() ?>
                        <div>
                            <?= \yii\helpers\Html::img($img->getUrl('107x80')) ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Partners Section -->