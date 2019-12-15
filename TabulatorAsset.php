<?php

namespace common\widgets\tabulator;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class TabulatorAsset extends AssetBundle
{

    public $sourcePath = '@common/widgets/tabulator/assets';

    public $css = [
        'plugins/css/tabulator.css',
    ];
    public $js = [
        'plugins/js/tabulator.js',
        'website/index.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        //'yii\web\JqueryAsset',
    ];

    public function init() {
        parent::init();
        $this->publishOptions['forceCopy'] = YII_ENV_DEV ? true : false ;
    }


}
