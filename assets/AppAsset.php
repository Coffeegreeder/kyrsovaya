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
        'web/css/main.css',
        'web/css/bootstrap.min.css',
        'web/css/font-awesome.min.css',
        'web/css/prettyPhoto.css',
        'web/css/price-range.css',
        'web/css/animate.css',
        'web/css/responsive.css',
		'web/css/layout/main.css',
		'web/css/layout/fontawesome-all.min.css',
    ];
    public $js = [
        'web/js/main.js',
		'web/js/layout/breakpoints.min.js',
		'web/js/layout/browser.min.js',
		'web/js/layout/jquery.min.js',
		'web/js/layout/jquery.scrollex.min.js',
		'web/js/layout/jquery.scrolly.min.js',
		'web/js/layout/util.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
