<?php

namespace fourteenmeister\core;

use yii\web\AssetBundle;

class BootboxAsset extends AssetBundle
{
    public $sourcePath = '@bower/bootbox';
    public $js = [
        'bootbox.js'
    ];
    public $depends = [
        'yii\bootstrap\BootstrapAsset',
    ];

}