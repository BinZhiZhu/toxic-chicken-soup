<?php

namespace app\assets;

use yii\web\AssetBundle;
use yii\web\View;

class VueJs extends AssetBundle
{
    public $js = [
        // 开发环境版本，包含了用帮助的命令行警告
        'https://cdn.staticfile.org/vue/2.5.16/vue.min.js',
        'https://unpkg.com/axios/dist/axios.min.js', //axios http库
       // 'https://unpkg.com/vue/dist/vue.js',
//        'https://unpkg.com/vue-router/dist/vue-router.js',//vue-router

        // 生产环境版本，优化了尺寸和速度
//        'https://cdn.jsdelivr.net/npm/vue',
    ];

    public $jsOptions = [
        'position' => View::POS_HEAD,
    ];
}
