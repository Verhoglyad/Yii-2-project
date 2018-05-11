<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'assets/css/font-awesome.min.css',
        'assets/css/bootstrap.min.css',

        'assets/css/slider/settings.css',
        'assets/css/slider/extralayers.css',
        'assets/css/slick.css',
        'assets/css/cubeportfolio.css',
        'assets/css/media.css',
        'assets/css/animate.min.css',
        'assets/css/liquid-slider.css',
        'assets/css/component.css',
        'assets/css/flexslider.css',
        'assets/css/color/beige.css',
        'assets/css/theme_panel.css',
        'https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,800,300,600,700',
        'https://fonts.googleapis.com/css?family=PT+Sans:400,700',
        'https://fonts.googleapis.com/css?family=Raleway:500,600,700,300',
        'assets/css/magnific-popup.css',
        'assets/css/photoswipe.css',
        'assets/css/default-skin/default-skin.css',
        'assets/css/style.css',

    ];
    public $js = [
        'assets/js/jquery-1.11.2.min.js',
        'assets/js/bootstrap.min.js',
        'assets/js/jquery.sticky.js',
        'assets/js/slider/jquery.themepunch.tools.min.js',
        'assets/js/slider/jquery.themepunch.revolution.min.js',
        'assets/js/slider/corporate-slider.js',
        'assets/js/jquery.cubeportfolio.min.js',
        'assets/js/portfolio-custom.js',
        'assets/js/slick.min.js',
        'assets/js/jquery.flexslider-min.js',
        'assets/js/modernizr.custom.js',
        'assets/js/jquery.magnific-popup.min.js',
        'assets/js/jquery.touchSwipe.min.js',
        'assets/js/jquery.liquid-slider.js',
        'https://maps.googleapis.com/maps/api/js?sensor=false',
        'assets/js/gmap3.min.js',
        'assets/js/ionrangeslider.js',
        'assets/js/classie.js',
        'assets/js/wow.min.js',
        'assets/js/jquery.accordion.js',
        'assets/js/jquery.cookie.js',
        'assets/js/transit.js',
        'assets/js/theme_panel.js',
        'assets/js/jquery.backstretch.min.js',
        'assets/js/slider/portfolio-single-custom.js',
        'assets/js/slider/custom-revolution.js',
        'assets/js/photoswipe.min.js',
        'assets/js/photoswipe-ui-default.min.js',
        'assets/js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
