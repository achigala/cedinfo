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
        'css/style.css',
        'css/styleAccordionMenu.css',
        //'css/card.css',
        'dist/material-cards.css',
        'dist/material-cards-auto-height.css',
    ];
    public $js = [
        //'js/jquery-3.2.0.min.js',
        'js/jsMenu.js',
        //'js/jsButton.js',
        'js/demo.js',
        'js/jquery.particleground.js',
        'js/jquery.particleground.min.js',
        //'js/jquery-1.11.1.min.js',
        'js/jquery.material-cards.js',
        'js/jquery.material-cards.min.js',

        'js/jsAccordionMenu.js',
    ];
    public $less = [
        'less/gm-variables.less',
        'less/material-cards.less',
        'less/material-cards-auto-height.less',
        'less/material-color.less',
        'less/mixin.less',

    ];
    public $scss = [
        'scss/style.scss',


    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
