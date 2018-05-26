<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        "css/bootstrap.min.css",
        "fonts/font-awesome-4.7.0/css/font-awesome.min.css",
        "dashboard/css/single.css",
        "plugin/owl-carousel/owl.carousel.css", 
        "plugin/owl-carousel/owl.theme.css" ,
        "plugin/aos/dist/aos.css" ,
        "css/style.css",
        "css/mystyle.css",
    ];
    public $js = [
        "js/jquery.min.js",
        "js/bootstrap.min.js",
        "js/velocity.min.js",
        "js/velocity.ui.js",
        "js/jquery.easing.1.3.js",
       "plugin/owl-carousel/owl.carousel.js",
       "plugin/aos/dist/aos.js",
       "js/script.js",
       "js/myscript.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
