<!-- Page title -->
<input type="hidden" value="4" id="pageId">
<section class="page-title-wrap">
    <div class="page-title-img shop-pagetitle-bg">
        <div class="container">
            <div class="row">
                <div class="cp-page-title-wrap">
                    <div class="header-color-back">
                        <div class="header-main-content">
<!--                            <h1><span>--><?//= $category->name ?><!--</span></h1>-->
                            <h1><span><?= $category->parent->name ?></span></h1>
<!--                            <p>--><?//= $category->parent->name ?><!--</p>-->
                            <p>Дизайн студія Comfort House</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Page title -->

<!-- Main Content -->
<section id="shop-item" class="shop-item">
    <div class="container">
        <div class="row">
            <!-- Shop Item -->
            <div class="col-sm-9" id="product-wrapper">
                <div class="shop-right">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="shop-item-heading">
<!--                                <p>Showing all 9 results</p>-->
                            </div>
                        </div>
                        <div class="col-sm-6 shop-right-item-padding">
                            <div class="shop-item-heading-right">
                                <ul>
                                    <li>
                                        <!-- Shop Top Dropdown -->
<!--                                        <div class="shop-top-dropdown">-->
<!--                                            <div class="shop-top-dropdown">-->
<!--                                                <div class="">-->
<!--                                                    <select>-->
<!--                                                        <option>Default Sorting</option>-->
<!--                                                        <option>Newest Item</option>-->
<!--                                                        <option>Date</option>-->
<!--                                                        <option>Price</option>-->
<!--                                                        <option>Newest Item</option>-->
<!--                                                    </select>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
                                        <!--/ End Shop Top Dropdown -->
                                    </li>
                                    <li>
                                        <!-- Shop Top Pagination Button -->
                                        <?php
                                        echo \yii\widgets\LinkPager::widget([
                                            'pagination' => $pages,
                                            'options' => ['class' => 'shop-pagination'],
                                            'prevPageLabel' => false,
                                            'nextPageLabel' => false,
                                        ])
                                        ?>
                                        <!--/ Shop Top Pagination Button -->
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                    <div class="shop-heading-border"></div>
                    <!-- Shop Item First Row -->
                    <div class="row custom-15" id="items_wrapper">
                        <?php if (!empty($products)): ?>
                        <?php foreach ($products as $product): ?>
                                <?php $mainImage = $product->getImage(); ?>
                        <!-- Shop Item -->
                        <div class="col-sm-4">
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
<!--                                    <h4>--><?//= $product->category->name ?><!--</h4>-->
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
                        <!--/ End Shop Item -->
                        <?php endforeach; ?>
                        <?php else: ?>
                        <h1>В этой категории товаров временно нет...</h1>
                        <?php endif; ?>


                    </div>
                    <!--/ End Shop Item First Row -->

                    <div class="row custom-15">
                        <div class="col-sm-12 align">
                            <!-- Shop Bottom Pagination Button -->
                            <?php
                            echo \yii\widgets\LinkPager::widget([
                                'pagination' => $pages,
                                'options' => ['class' => 'shop-pagination'],
                                'prevPageLabel' => false,
                                'nextPageLabel' => false,
                            ])
                            ?>
                            <!--/ Shop Bottom Pagination Button -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 shop-item-left-back">
                <div class="shop-item-left">
<!--                    <div class="left-cart">-->
<!--                        <h4>Cart</h4>-->
<!--                        <div class="left-cart-image">-->
<!--                            <img src="/assets/images/shop/left-cart-1.jpg" alt="">-->
<!--                            <div class="left-cart-content">-->
<!--                                <h6>Modern Sofa</h6>-->
<!--                                <p>1 x <span>$250</span></p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="left-cart-border"></div>-->
<!---->
<!--                    <p class="left-cart-total">Subtotal:<span>$250</span></p>-->
<!--                    <div class="left-cart-link">-->
<!--                        <ul>-->
<!--                            <li>-->
<!--                                <a href="#">View Cart</a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="#">Cheakout</a>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                    <div id="leftCart"></div>-->


                    <div class="Shop-category">
                        <div class="sidebar-box">
                            <h4>Категории</h4>
                        </div>
                        <div class="blog-category">
                            <ul id="menu_category">
                                <?= \app\components\MenuWidget::widget(['templ' => 'menu']) ?>
<!--                                <li>-->
<!--                                    <a href="--><?//= \yii\helpers\Url::to(['shop/list', 'id' => 1]) ?><!--">-->
<!--                                            <i class="fa fa-angle-right"></i>-->
<!--                                        <span>Кухня</span>-->
<!--                                    </a>-->
<!--                                </li>-->
<!---->
<!--                                <li>-->
<!--                                    <a href="--><?//= \yii\helpers\Url::to(['shop/list', 'id' => 2]) ?><!--">-->
<!--                                        <i class="fa fa-angle-right"></i>-->
<!--                                        <span>Гостинная</span>-->
<!--                                    </a>-->
<!--                                </li>-->
<!---->
<!--                                <li class="no-border">-->
<!--                                    <a href="--><?//= \yii\helpers\Url::to(['shop/list', 'id' => 5]) ?><!--">-->
<!--                                        <i class="fa fa-angle-right"></i>-->
<!--                                        <span>Спальня</span>-->
<!--                                    </a>-->
<!--                                </li>-->
                            </ul>
                        </div>
                    </div>

                    <div class="sidebar-box">
                        <h4>Фильтр по цене</h4>
                        <input  data-all="<?= Yii::$app->request->get('all') ?>" data-id="<?= Yii::$app->request->get('id') ?>" type="text" id="price-slider">
                        <div class="filter">
                            <h5><span id="clear-filter">Сбросить</span></h5>
                        </div>
                    </div>

                    <div class="onsale-left">
                        <div class="sidebar-box">
                            <h4>Скидка</h4>
                            <?php foreach ($sale as $item): ?>
                            <?php $mainImage = $item->getImage() ?>
                            <div class="onsale-cart-image">
                                <a href="<?= \yii\helpers\Url::to(['shop/detail', 'id' => $item->id]) ?>">
                                    <?= \yii\helpers\Html::img($mainImage->getUrl('77x78')) ?>
                                </a>
                                <div class="onsale-cart-content">
                                    <h6><a href="<?= \yii\helpers\Url::to(['shop/detail', 'id' => $item->id]) ?>"><?= $item->name ?></a></h6>
                                    <p><del>$<?= $item->old_price ?></del> <span>$<?= $item->price ?></span></p>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Main Content -->