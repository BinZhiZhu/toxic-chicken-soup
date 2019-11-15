<?php

namespace app\assets;

use yii\web\AssetBundle;
use yii\web\View;
use yii\web\JqueryAsset;
/**
 * Element是一个基于vue的后台框架
 * http://element-cn.eleme.io/#/zh-CN/component/installation
 *
 * @package  app\assets
 */
class ElementUI extends AssetBundle
{
    public $css = [
        'https://unpkg.com/element-ui/lib/theme-chalk/index.css',
     //   'css/layout.css'
    ];

    public $js = [
        'https://unpkg.com/element-ui/lib/index.js',
    ];

    //  public $css = [
    //     'https://cdn.staticfile.org/element-ui/2.4.11/theme-chalk/index.css',
    // ];

    // public $js = [
    //     'https://cdn.staticfile.org/element-ui/2.4.11/index.js',
    // ];

    public $depends = [
        VueJs::class,
        JqueryAsset::class,
    ];

    public $jsOptions = [
        'position' => View::POS_HEAD,
    ];
}
