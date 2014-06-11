<?php

namespace fourteenmeister\core;

use yii\web\AssetBundle;

class CoreAsset extends AssetBundle
{
    public $sourcePath = '@fourteenmeister/core/assets';
    public $css = [
        'css/core.css',
    ];
    public $js = [
        'js/core.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\widgets\PjaxAsset',
        'fourteenmeister\core\BootboxAsset',
    ];

}