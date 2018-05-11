<!-- Page title -->
<input type="hidden" value="3" id="pageId">
<section class="page-title-wrap">
    <div class="page-title-img portfolio-pagetitle-bg">
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

<section id="cp-portfolio-single" class="custom-80">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="gallery-title">Фото галерея:</h1>

                <div id="my-gallery" class="my-gallery" itemscope itemtype="">

                    <?php $gallery = $portfolio->getImages();?>
                    <?php $i=0; foreach ($gallery as $img):  ?>
                        <figure itemprop="associatedMedia" itemscope itemtype="" <?php if ($i<=7){echo "class=\"visible-item\"";} else echo"class=\"invisible-item\""?>>
                            <a href="<?= $img->getUrl()?>" itemprop="contentUrl" data-size="<?= $img->getSizes()['width'] . 'x' . $img->getSizes()['height'] ?>">
                                <img src="<?= $img->getUrl('400x300') ?>" itemprop="thumbnail" alt="Image description" />
                            </a>
                        </figure>
                    <?php if ($i == 7)break ?>
                    <?php $i++; endforeach; ?>

                </div>
                <a id="showAllImg" data-id="<?= $portfolio->id ?>" class="btn-pm" href="">Еще фото</a>
                <!-- Root element of PhotoSwipe. Must have class pswp. -->
                <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

                    <!-- Background of PhotoSwipe.
                         It's a separate element, as animating opacity is faster than rgba(). -->
                    <div class="pswp__bg"></div>

                    <!-- Slides wrapper with overflow:hidden. -->
                    <div class="pswp__scroll-wrap">

                        <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
                        <!-- don't modify these 3 pswp__item elements, data is added later on. -->
                        <div class="pswp__container">
                            <div class="pswp__item"></div>
                            <div class="pswp__item"></div>
                            <div class="pswp__item"></div>
                        </div>

                        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
                        <div class="pswp__ui pswp__ui--hidden">

                            <div class="pswp__top-bar">

                                <!--  Controls are self-explanatory. Order can be changed. -->

                                <div class="pswp__counter"></div>

                                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                                <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR -->
                                <!-- element will get class pswp__preloader--active when preloader is running -->
                                <div class="pswp__preloader">
                                    <div class="pswp__preloader__icn">
                                        <div class="pswp__preloader__cut">
                                            <div class="pswp__preloader__donut"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                                <div class="pswp__share-tooltip"></div>
                            </div>

                            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                            </button>

                            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                            </button>

                            <div class="pswp__caption">
                                <div class="pswp__caption__center"></div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
</section>
<!--/ End Main Content -->

<!-- Details -->

<section id="toggle-detail-1">
    <div class="container">
        <div class="row custom-50">
            <div class="col-sm-4">
                <div class="project-info">
                    <h2>О ПРОЕКТЕ</h2>

                    <h5 class="wow fadeInRight" data-wow-duration="2s" data-wow-delay=".1s"><span>Клиент:</span><?= $portfolio->client ?></h5>
                    <h5 class="wow fadeInRight" data-wow-duration="2s" data-wow-delay=".2s"><span>Дата:</span><?= $portfolio->date ?></h5>
                    <h5 class="wow fadeInRight" data-wow-duration="2s" data-wow-delay=".3s"><span>Категория:</span><?= $portfolio->category_id ?></h5>

                </div>

                <div class="project-quote-1 wow fadeInUp">
                    <div class="project-white-1">
                        <div class="quote-icon">
                            <span>“</span>
                        </div>
                        <h2><?= $portfolio->client ?></h2>

                        <p class="custom-30">
                           <?= $portfolio->review ?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-8">
                <div class="project-info">

                    <h3><?= $portfolio->title ?></h3>

                    <p><?= $portfolio->text ?></p>

                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Details -->