<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

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
        'css/site.css',
        // 'urora/css/bootstrap-material-design.min.css',
        // 'urora/css/icons.css',
        // 'urora/css/style.css',
        // 'urora/plugins/fullcalendar/vanillaCalendar.css',
        // 'urora/plugins/jvectormap/jquery-jvectormap-2.0.2.css',
        // 'urora/plugins/timepicker/tempusdominus-bootstrap-4.css',
        // 'urora/plugins/timepicker/bootstrap-material-datetimepicker.css',
        // 'urora/plugins/chartist/css/chartist.min.css',
        // 'urora/plugins/morris/morris.css',
        // 'urora/plugins/metro/MetroJs.min.css',
        // 'urora/plugins/carousel/owl.carousel.min.css',
        // 'urora/plugins/carousel/owl.theme.default.min.css',
        // 'urora/plugins/animate/animate.css',
        // 'urora//plugins/select2/select2.min.css',

    ];
    public $js = [
        // 'urora/js/app.js',
        // 'urora/js/bootstrap-material-design.js',
        // 'urora/js/detect.js',
        // 'urora/js/fastclick.js',
        // 'urora/js/jquery.blockUI.js',
        // 'urora/js/jquery.min.js',
        // 'urora/js/jquery.nicescroll.js',
        // 'urora/js/jquery.scrollTo.min.js',
        // 'urora/js/jquery.slimscroll.js',
        // 'urora/js/modernizr.min.js',
        // 'urora/js/popper.min.js',
        // 'urora/js/waves.js',
        // 'urora/plugins/carousel/owl.carousel.min.js',
        // 'urora/plugins/fullcalendar/vanillaCalendar.js',
        // 'urora/plugins/peity/jquery.peity.min.js',
        // 'urora/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js',
        // 'urora/plugins/jvectormap/jquery-jvectormap-world-mill-en.js',
        // 'urora/plugins/chartist/js/chartist.min.js',
        // 'urora/plugins/chartist/js/chartist-plugin-tooltip.min.js',
        // 'urora/plugins/metro/MetroJs.min.js',
        // 'urora/plugins/raphael/raphael.min.js',
        // 'urora/plugins/morris/morris.min.js',
        // 'urora/pages/dashborad.js',
        // 'urora/pages/form-advanced.js',
        // 'urora/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js',
        // 'urora/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js',
        // 'urora/plugins/timepicker/moment.js',
        // 'urora/plugins/timepicker/tempusdimus-bootstrap-4.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
