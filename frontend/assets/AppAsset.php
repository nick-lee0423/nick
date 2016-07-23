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
    public $jsOptions = ['position' => \yii\web\View::POS_HEAD];
    public $css = [
        'css/base.css',
        'css/index.css',
    ];
    public $js = [
        'js/sliders.js',
        'js/modernizr.js',
        'js/nav.js',
        'js/gotp.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];

    //定义按需加载JS方法，注意加载顺序在最后
    public static function addScript($view,$jsfile){
        $view->registerJsFile($jsfile,[AppAsset::className(),'depends'=>'app\assets\AppAsset']);
    }

    // 定义按需加载CSS方法，注意加载顺序在最后
    public static function addCss($view,$cssfile){
        $view->registerCssFile($cssfile,[AppAsset::className(),'depends'=>'app\assets\AppAsset']);
    }
}
