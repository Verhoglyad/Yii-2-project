<?php if( Yii::$app->session->hasFlash('success') ): ?>
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo Yii::$app->session->getFlash('success'); ?>
    </div>
<?php endif;?>
<?php if (!empty($session['cart'])): ?>

        <div class="row">
            <div class="col-md-7">
                <h2>Выбраные товары</h2>
                <div class="table-responsive">
                    <table class="table table-hover table-striped">
                        <thead class="modal-cart-bold">
                        <td>Фото</td>
                        <td>Название</td>
                        <td>Количество</td>
                        <td>Цена</td>
                        <td></td>
                        </thead>
                        <tbody>
                        <?php foreach ($session['cart'] as $id => $item): ?>
                            <tr>
                                <td><?= \yii\helpers\Html::img($item['img'], ['class' => 'cart_img']) ?></td>
                                <td><?= $item['name']?></td>
                                <td>
                                    <div class="cart-item-quantity">
                                        <button data-id="<?= $id ?>" class="cart-item-minus minus-custom cart-item-quantity-btn"><i class="fa fa-minus"></i></button>
                                        <input id="<?= $id ?>" type="text" name="cart-quantity" class="cart-quantity minus-custom" value="<?= $item['qty'] ?>" />
                                        <button data-id="<?= $id ?>" class="cart-item-plus minus-custom cart-item-quantity-btn"><i class="fa fa-plus"></i></button>
                                    </div>
                                </td>
                                <td><?= $item['price'] ?> грн</td>
                                <td><span data-id="<?= $id ?>" class="glyphicon glyphicon-remove text-danger del-item" aria-hidden="true"></span></td>
                            </tr>
                        <?php endforeach; ?>
                        <tr class="reset_height">
                            <td colspan="3"></td>
                            <td colspan="1" class="modal-cart-bold">Всего товаров:</td>
                            <td colspan="1" class="modal-cart-bold"><?= $session['cart.qty'] ?></td>
                        </tr>
                        <tr class="reset_height">
                            <td colspan="3"></td>
                            <td colspan="1" class="modal-cart-bold">На сумму</td>
                            <td colspan="1" class="modal-cart-bold"><?= $session['cart.sum'] ?> грн.</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-5">
                <h2>Оформить заказ</h2>
                <form role="form" id="oder_form">
                    <div class="form-group">
                        <label for="name">Имя</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Ваше имя">
                    </div>
                    <div class="form-group">
                        <label for="phone">Телефон</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Ваш телефон">
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Ваш E-mail">
                    </div>
                    <div class="form-group">
                        <label for="comment">Коментарий</label>
                        <textarea id="comment" name="comment" class="form-control" rows="3" placeholder="Впишите пожелание"></textarea>
                    </div>
                    <button id="submitOder" type="submit" class="btn btn-cart-pm">Заказать</button>
                    <img class="oder_loader" src="/assets/images/cbp-loading.gif" alt="">
                </form>
            </div>
        </div>



<?php else: ?>
<h3>Корзина Пуста</h3>
<?php endif; ?>
