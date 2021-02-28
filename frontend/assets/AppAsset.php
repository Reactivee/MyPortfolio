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
        // 'css/site.css',
        'vendor/bootstrap/css/bootstrap.min.css',

        "vendor/font-awesome/css/font-awesome.min.css",

        "https://fonts.googleapis.com/css?family=Roboto+Slab:400,700%7CRoboto:400,700,300",

        "vendor/owl.carousel/assets/owl.carousel.css",
        "vendor/owl.carousel/assets/owl.theme.default.css",

        "vendor/animate.css/animate.css",

        "css/style.default.css",
        'css/custom.css',

        "https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.4.0/leaflet.css",


    ];
    public $js = [

        "vendor/jquery/jquery.min.js",
        "vendor/bootstrap/js/bootstrap.bundle.min.js",
        "vendor/jquery.cookie/jquery.cookie.js",
        "vendor/owl.carousel/owl.carousel.min.js",
        "vendor/waypoints/lib/jquery.waypoints.min.js",
        "vendor/jquery.counterup/jquery.counterup.js",
        "https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.4.0/leaflet.js",
        "js/front.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
