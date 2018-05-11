<?php $gallery = $portfolio->getImages();?>
<?php for ($i= $num; $i<count($gallery); $i++): ?>
    <figure itemprop="associatedMedia" itemscope itemtype="">
        <a href="<?= $gallery[$i]->getUrl()?>" itemprop="contentUrl" data-size="<?= $gallery[$i]->getSizes()['width'] . 'x' . $gallery[$i]->getSizes()['height'] ?>">
            <img src="<?= $gallery[$i]->getUrl('400x300') ?>" itemprop="thumbnail" alt="Image description" />
        </a>
    </figure>
    <?php if ($i == $num + 15)break ?>
<?php endfor; ?>
