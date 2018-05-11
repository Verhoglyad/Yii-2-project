<?php if ( !empty($session['cart']) ): ?>
<div class="left-cart">
<h4>Cart</h4>
<ul>
<?php foreach ($session['cart'] as $id => $item): ?>
<li>
    <div class="left-cart-image">
        <img src="/assets/images/shop/left-cart-1.jpg" alt="">
        <div class="left-cart-content">
            <h6><?= $item['name'] ?></h6>
            <p>1 x <span>$<?= $item['price'] ?></span></p>
        </div>
    </div>

</li>
<?php endforeach; ?>

</ul>
</div>
    <div class="left-cart-border"></div>

    <p class="left-cart-total">Сумма:<span>$<?= $session['cart.sum'] ?></span></p>
    <p class="left-cart-total">Количество:<span>$<?= $session['cart.qty'] ?></span></p>
    <div class="left-cart-link">
        <ul>
            <li>
                <a href="#">View Cart</a>
            </li>
            <li>
                <a href="#">Cheakout</a>
            </li>
        </ul>
    </div>

<?php else: ?>

    <h2>Пусто</h2>

<?php endif; ?>
