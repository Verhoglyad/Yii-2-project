<!-- Corporate POrtfolio Header -->
<input type="hidden" value="4" id="pageId">
<section id="cp">
    <div class="portfolio-header-back">
        <div class="container">
            <div class="row">
                <div class="col-sm-offset-4 col-sm-4">
                    <div class="header-color-back">
                        <div class="header-main-content">
                            <h1><span><?= $item->name ?></span></h1>
                            <p>Дизайн студія Comfort House</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Corporate POrtfolio Header -->

<!-- Main Content -->
<section id="shop-item-1">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="single-item-show">
                    <div class="flexslider">
                        <ul class="slides">
                            <?php $item_images = $item->getImages() ?>
                            <?php foreach ($item_images as $item_image): ?>
                                <li data-thumb="<?= $item_image->getUrl('81x107') ?>">
                                    <?= \yii\helpers\Html::img($item_image->getUrl('555x402')) ?>
<!--                                    <img src="/assets/images/shop/products/large/image1.jpg" alt="" />-->
                                </li>
                            <?php endforeach; ?>
<!--                            <li data-thumb="/assets/images/shop/products/image1.jpg">-->
<!--                                <img src="/assets/images/shop/products/large/image1.jpg" alt="" />-->
<!--                            </li>-->
<!--                            <li data-thumb="/assets/images/shop/products/image2.jpg">-->
<!--                                <img src="/assets/images/shop/products/large/image2.jpg" alt="" />-->
<!--                            </li>-->
<!--                            <li data-thumb="/assets/images/shop/products/image3.jpg">-->
<!--                                <img src="/assets/images/shop/products/large/image3.jpg" alt="" />-->
<!--                            </li>-->
<!--                            <li data-thumb="/assets/images/shop/products/image4.jpg">-->
<!--                                <img src="/assets/images/shop/products/large/image4.jpg" alt="" />-->
<!--                            </li>-->
<!--                            <li data-thumb="/assets/images/shop/products/image5.jpg">-->
<!--                                <img src="/assets/images/shop/products/large/image5.jpg" alt="" />-->
<!--                            </li>-->

                        </ul>
                    </div>


                </div>
            </div>
            <div class="col-sm-6">
                <div class="shop-item-details">
                    <div class="page-header-1">
                        <h1><?= $item->name ?></h1>

                        <div class="custom-border">
                            <div class="custom-border-1"></div>
                        </div>
                    </div>

                    <div class="detail-content">
                        <div class="rating">
                            <ul>
                                <?php if ($item->sale == 1): ?>
                                    <li class="rating-price wow fadeInRight" data-wow-delay=".0s"><del><?= $item->old_price ?></del> <span><?= $item->price ?> грн.</span></li>
                                <?php else: ?>
                                    <li class="rating-price wow fadeInRight" data-wow-delay=".0s"><span><?= $item->price ?> грн.</span></li>
                                <?php endif; ?>

<!--                                <li class="wow fadeInRight" data-wow-delay=".1s"><a><img src="/assets/images/shop/star.png" alt=""><span>1 rating</span></a></li>-->
                            </ul>
                        </div>
                        <div class="item-description">
                            <ul>
                                <li class="wow fadeInRight" data-wow-delay=".2s">
                                    <i class="fa fa-circle-thin"></i>
                                    <span>Материал:</span>
                                    <?= $item->material ?>
                                </li>
                                <li class="wow fadeInRight" data-wow-delay=".3s">
                                    <i class="fa fa-circle-thin"></i>
                                    <span>Стиль:</span>
                                    <?= $item->style ?>
                                </li>
                                <li class="wow fadeInRight" data-wow-delay=".4s">
                                    <i class="fa fa-circle-thin"></i>
                                    <span>Брэнд:</span>
                                    <?= $item->brand ?>
                                </li>
                                <li class="wow fadeInRight" data-wow-delay=".5s">
                                    <i class="fa fa-circle-thin"></i>
                                    <span>Размеры:</span>
                                    <?= $item->dimension ?>
                                </li>
                            </ul>
                        </div>

                        <p class="bot-1 wow fadeInRight" data-wow-delay=".6s">
                            <?= $item->content ?>
                        </p>
<!--                        <p class="bot-1 wow fadeInRight" data-wow-delay=".7s">-->
<!--                            Второй абзац-->
<!--                        </p>-->

                        <div class="Choose-item">
                            <ul class="wow fadeInDown">
                                <li>
                                    <div class="cart-item-quantity">
                                        <button class="cart-item-minus minus-custom"><i class="fa fa-minus"></i></button>
                                        <input id="qty" type="text" name="cart-quantity" class="cart-quantity minus-custom" value="1" />
                                        <button class="cart-item-plus minus-custom"><i class="fa fa-plus"></i></button>
                                    </div>
                                </li>
                                <li>
                                    <!-- Shop Top Dropdown -->
<!--                                    <div class="shop-top-dropdown">-->
<!--                                        <div class="shop-top-dropdown">-->
<!--                                            <div class="">-->
<!--                                                <select>-->
<!--                                                    <option>Default Sorting</option>-->
<!--                                                    <option>Newest Item</option>-->
<!--                                                    <option>Date</option>-->
<!--                                                    <option>Price</option>-->
<!--                                                    <option>Newest Item</option>-->
<!--                                                </select>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
                                    <!--/ End Shop Top Dropdown -->
                                </li>
                            </ul>
                        </div>

                        <div class="cart-button wow fadeInUp">
<!--                            <a href="#" data-id="--><?//= $item->id ?><!--" class="add-to-cart">Добавить в корзину</a>-->
                            <?php if (!isset($session['cart'][$item->id])): ?>
                                <p><a href="" class="btn btn-default add-to-cart" role="button" data-id="<?= $item->id ?>">Добавить в корзину</a></p>
                            <?php else: ?>
                                <p><a href="" class="btn btn-default active del-item" role="button" data-id="<?= $item->id ?>">Удалить из корзины</a></p>
                            <?php endif; ?>
                        </div>

                        <div class="item-description margin-20">
                            <ul>
                                <li class="wow fadeInRight" data-wow-delay=".1s">
                                    <span>Категория:</span>
                                    <a href="<?= \yii\helpers\Url::to(['shop/list', 'id' => $item->category->parent->id, 'all' => 1]) ?>"><?= $item->category->parent->name ?></a>
                                </li>
                                <li class="wow fadeInRight" data-wow-delay=".2s">
                                    <span>Тэги:</span>
                                    <?= $item->tags ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Main Content -->

<!-- Related Product Section -->
<section id="related-item-1" class="grey related-product">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="cp-page-header">
                    <h2>ТОВАРЫ В ЭТОЙ КАТЕГОРИИ</h2>
                    <p><?= $item->category->parent->name ?></p>
                    <img src="/assets/images/header-bottom.png" alt="">
                </div>
            </div>
        </div>
        <!-- Shop Item First Row -->
        <div class="row custom-15">

            <?php foreach($products as $product): ?>
            <?php $img = $product->getImage() ?>
            <!-- Shop Item One -->
            <div class="col-md-2 col-sm-4 col-xs-6">
                <div class="thumbnail">
                    <div class="shop-item-figure">
                        <a href="<?= \yii\helpers\Url::to(['shop/detail', 'id' => $product->id]) ?>">
                            <?= \yii\helpers\Html::img($img->getUrl('600x500'), ['class' => 'img-bottom-border']) ?>
                        </a>
                        <div class="item-sale">
                            <P>Sale!</P>
                        </div>
                    </div>
                    <div class="caption">
                        <h2><a href="<?= \yii\helpers\Url::to(['shop/detail', 'id' => $product->id]) ?>"><?= $product->name ?></a></h2>
                        <?php if ($product->sale == 1): ?>
                            <p><span><del><?= $product->old_price ?> </del></span><?= $product->price ?> грн.</p>
                        <?php else: ?>
                            <p><?= $product->price ?> грн.</p>
                        <?php endif; ?>

                        <?php if (!isset($session['cart'][$product->id])): ?>
                            <p class="related-add-cart"><a href="" class="btn btn-default add-to-cart" role="button" data-id="<?= $product->id ?>">Добавить в корзину</a></p>
                        <?php else: ?>
                            <p class="related-add-cart"><a href="" class="btn btn-default active del-item" role="button" data-id="<?= $product->id ?>">Удалить из корзины</a></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <!--/ End Shop Item One -->
            <?php endforeach; ?>

        </div>
        <!--/ End Shop Item First Row -->
    </div>
</section>
<!--/ End Related Product Section -->