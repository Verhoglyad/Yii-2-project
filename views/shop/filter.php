
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
//                        echo \yii\widgets\LinkPager::widget([
//                            'pagination' => $pages,
//                            'options' => ['class' => 'shop-pagination'],
//                            'prevPageLabel' => false,
//                            'nextPageLabel' => false,
//                        ])
//                        ?>
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
                <!-- Shop Item -->
                <div class="col-sm-4">
                    <div class="thumbnail light-grey">
                        <div class="shop-item-figure">
                            <a href="<?= \yii\helpers\Url::to(['shop/detail', 'id' => $product->id]) ?>"><img src="/assets/images/shop/shop-item-2.jpg" alt=""></a>
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
            <h1>В данном диапазоне цен ничего нет...</h1>
        <?php endif; ?>


    </div>
    <!--/ End Shop Item First Row -->

    <div class="row custom-15">
        <div class="col-sm-12 align">
            <!-- Shop Bottom Pagination Button -->
                            <?php
//                            echo \yii\widgets\LinkPager::widget([
//                                'pagination' => $pages,
//                                'options' => ['class' => 'shop-pagination'],
//                                'prevPageLabel' => false,
//                                'nextPageLabel' => false,
//                            ])
                            ?>
            <!--/ Shop Bottom Pagination Button -->
        </div>
    </div>
</div>
