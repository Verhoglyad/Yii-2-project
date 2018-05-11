<!-- Page title -->
<input type="hidden" value="3" id="pageId">
<section class="page-title-wrap">
    <div class="page-title-img default-pagetitle-bg">
        <div class="container">
            <div class="row">
                <div class="cp-page-title-wrap">
                    <div class="header-color-back">
                        <div class="header-main-content">
                            <h1><span>Портфолио</span></h1>
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
<section id="portfolio" class="portfolio-page2">
    <div class="container-fluid">
        <div class="cbp-panel portfolio-wrapper">

            <div id="filters-container" class="cbp-l-filters-work">
                <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">
                    <div class="filter-hover-1"></div>
                    <div>Все</div>
                </div>
                <div data-filter=".гостиная" class="cbp-filter-item">
                    <div class="filter-hover-2"></div>
                    <div>Гостиная</div>
                </div>
                <div data-filter=".кухня" class="cbp-filter-item">
                    <div class="filter-hover-3"></div>
                    <div>кухня </div>
                </div>
                <div data-filter=".ванная" class="cbp-filter-item">
                    <div class="filter-hover-4"></div>
                    <div>ванная </div>
                </div>
                <div data-filter=".спальня" class="cbp-filter-item">
                    <div class="filter-hover-5"></div>
                    <div>спальня </div>
                </div>
                <div data-filter=".экстерьер" class="cbp-filter-item">
                    <div class="filter-hover-6"></div>
                    <div>экстерьер </div>
                </div>
            </div>

            <div id="grid-container" class="container cbp cbp-l-grid-work">
                <?php foreach ($portfolios as $port): ?>
                <?php $mainImage = $port->getImage(); ?>

                <div class="cbp-item  <?= $port->category_id ?>">
                    <a href="<?= $mainImage->getUrl(); ?>" class="cbp-caption cbp-lightbox">
                        <div class="cbp-caption-defaultWrap">
<!--                            <img class="img-responsive" src="/assets/images/portfolio/cp-portfolio/cp-port-1.jpg" alt="">-->
<!--                            <img class="img-responsive" src="/assets/images/portfolio/--><?//= $port->img ?><!--" alt="">-->
                            <a href="<?= \yii\helpers\Url::to(['portfolio/single', 'id' => $port->id]) ?>"><?= \yii\helpers\Html::img($mainImage->getUrl('400x300'), ['class' => 'img-responsive']) ?></a>
                        </div>
                    </a>
                    <div class="cbp-project-title"><?= $port->title ?></div>
                    <div class="cbp-l-grid-work-desc"><?= $port->text ?></div>
<!--                    <div class="cbp-l-grid-work-desc">services did you perfoem, fror who and similar.</div>-->
                    <a href="<?= \yii\helpers\Url::to(['portfolio/single', 'id' => $port->id]) ?>" class="cbp-l-grid-work-title"><span>Посмотреть проект</span></a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<!--/ End Main Content -->