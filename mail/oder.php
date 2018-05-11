<h3>Имя: <?= $name ?></h3>
<h3>Телефон: <?= $phone ?></h3>
<h3>E-mail: <?= $email ?></h3>
<h3>Коментарий: <?= $comment ?></h3>
<table class="table table-hover table-striped" style="width: 100%; border-collapse: collapse;">
    <thead class="modal-cart-bold">
    <td style="border-bottom: 1px solid #252525; padding: 10px 30px">Название</td>
    <td style="border-bottom: 1px solid #252525; padding: 10px 30px">Количество</td>
    <td style="border-bottom: 1px solid #252525; padding: 10px 30px">Цена</td>
    <td></td>
    </thead>
    <tbody>
    <?php foreach ($session['cart'] as $id => $item): ?>
        <tr style="height: 50px;">
            <td style="border-bottom: 1px solid #252525; padding: 10px 30px"><?= $item['name']?></td>
            <td style="border-bottom: 1px solid #252525; padding: 10px 30px"><?= $item['qty'] ?></td>
            <td style="border-bottom: 1px solid #252525; padding: 10px 30px"><?= $item['price'] ?> грн</td>
        </tr>
    <?php endforeach; ?>
    <tr style="height: 50px;" class="reset_height">
        <td colspan="1"></td>
        <td style="border-bottom: 1px solid #252525; padding: 10px 30px" colspan="1" class="modal-cart-bold">Всего товаров:</td>
        <td style="border-bottom: 1px solid #252525; padding: 10px 30px" colspan="1" class="modal-cart-bold"><?= $session['cart.qty'] ?></td>
    </tr>
    <tr style="height: 50px;" class="reset_height">
        <td colspan="1"></td>
        <td style="border-bottom: 1px solid #252525; padding: 10px 30px" colspan="1" class="modal-cart-bold">На сумму</td>
        <td style="border-bottom: 1px solid #252525; padding: 10px 30px" colspan="1" class="modal-cart-bold"><?= $session['cart.sum'] ?> грн.</td>
    </tr>
    </tbody>
</table>