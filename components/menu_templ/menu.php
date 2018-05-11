<li class="no-border">
    <a href="<?= \yii\helpers\Url::to(['shop/list', 'id' => $category['id']]) ?>">
        <?php if ( isset($category['childs']) ): ?>
            <i class="fa fa-angle-right"></i>
        <?php endif; ?>
        <span><?= $category['name'] ?></span>
    </a>
    <?php if ( isset($category['childs']) ): ?>
        <ul class="sub_menu_category">
            <li class="no-border">
                <a href="<?= \yii\helpers\Url::to(['shop/list', 'id' => $category['id'], 'all' => 1]) ?>"><span>Все товары</span></a>
            </li>
            <?= $this->getMenuHtml($category['childs']) ?>
        </ul>
    <?php endif; ?>
</li>
