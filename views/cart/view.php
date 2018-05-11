<?php if (!empty($session['cart'])): ?>
    <div class="container checkout">
        <h1>Оформить заказ</h1>
        <div class="row">
            <div class="col-md-6">
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
                        <tr>
                            <td colspan="3"></td>
                            <td colspan="1" class="modal-cart-bold">Итого</td>
                            <td colspan="1" class="modal-cart-bold"><?= $session['cart.qty'] ?></td>
                        </tr>
                        <tr>
                            <td colspan="3"></td>
                            <td colspan="1" class="modal-cart-bold">На сумму</td>
                            <td colspan="1" class="modal-cart-bold"><?= $session['cart.sum'] ?></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-6">
                <form role="form">
                    <div class="form-group">
                        <label for="name">Имя</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Ваше имя">
                    </div>
                    <div class="form-group">
                        <label for="phone">Телефон</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Ваш телефон">
                    </div>
                    <div class="form-group">
                        <label for="message">Коментарий</label>
                        <textarea id="message" name="message" class="form-control" rows="3" placeholder="Впишите пожелание"></textarea>
                    </div>
                    <button type="submit" class="btn btn-default">Заказать</button>
                </form>
<!--                --><?//= $form = \yii\widgets\ActiveForm::begin() ?>
<!--                --><?//= $form->field()->textInput() ?>
<!--                --><?//= $form = \yii\widgets\ActiveForm::end() ?>
            </div>
        </div>
    </div>
<?php else: ?>
    <h3>Корзина Пуста</h3>
<?php endif; ?>
