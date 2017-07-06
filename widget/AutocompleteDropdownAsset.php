<?php
namespace kl83\widgets;

class AutocompleteDropdownAsset extends \yii\web\AssetBundle
{
    public $js = [ 'widget.js' ];
    public $depends = [ 'yii\jui\JuiAsset' ];
    public function init()
    {
        $this->sourcePath = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'dist';
        parent::init();
    }
}
