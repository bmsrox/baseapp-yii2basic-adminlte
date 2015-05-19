<?php

namespace app\themes\adminLTE\assets;

use yii\web\AssetBundle;

class AdminlteAsset extends AssetBundle
{
    public $sourcePath = '@vendor/almasaeed2010/adminlte/dist';
    public $css = [
        'https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css',
        'css/AdminLTE.min.css',
        'css/skins/_all-skins.min.css'
    ];
    public $js = [
        'js/app.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
