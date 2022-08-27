<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "css/lib/calendar2/pignose.calendar.min.css",
       "css/lib/chartist/chartist.min.css",
       "css/lib/font-awesome.min.css",
       "css/lib/themify-icons.css",
       "css/lib/owl.carousel.min.css",
       "css/lib/owl.theme.default.min.css",
       "css/lib/weather-icons.css",
       "css/lib/menubar/sidebar.css",
       "css/lib/bootstrap.min.css",
       "css/lib/helper.css",
       "css/style.css",
        'css/site.css',
    ];
    public $js = [
   "js/lib/jquery.min.js",
   "js/lib/jquery.nanoscroller.min.js",
   "js/lib/menubar/sidebar.js",
   "js/lib/preloader/pace.min.js",
   "js/lib/bootstrap.min.js",
   "js/scripts.js",
   "js/lib/calendar-2/moment.latest.min.js",
   "js/lib/calendar-2/pignose.calendar.min.js",
   "js/lib/calendar-2/pignose.init.js",
   "js/lib/weather/jquery.simpleWeather.min.js",
   "js/lib/weather/weather-init.js",
   "js/lib/circle-progress/circle-progress.min.js",
   "js/lib/circle-progress/circle-progress-init.js",
   "js/lib/chartist/chartist.min.js",
   "js/lib/sparklinechart/jquery.sparkline.min.js",
   "js/lib/sparklinechart/sparkline.init.js",
   "js/lib/owl-carousel/owl.carousel.min.js",
   "js/lib/owl-carousel/owl.carousel-init.js",
   "js/dashboard2.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
