<?php
namespace backend\components;

use yii\base\Widget;
class ClockWidget extends Widget
{
public function init()
{
\yii\web\JqueryAsset::register($this->getView());
}
public function run()
{
return $this->render('clock');
}
}