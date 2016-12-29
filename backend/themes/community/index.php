<?php
/* @var $this yii\web\View */
use yii\filters\Cors;
use yii\widgets\Menu;
?>
<h1>community/index</h1>

<p>
   <?php echo(Cors::className())?>
</p>
<p>
   <?php echo(Menu::className())?>
</p>

<p> Time zone: <?php print_r(Yii::$app->timeZone )?></p>
<p> BasePath: <?php print_r(Yii::$app->basePath )?></p>
<p> Charset: <?php print_r(Yii::$app->charset )?></p>
<p> Language: <?php print_r(Yii::$app->language )?></p>
<p> Info: <?php print_r(Yii::info('View', $category = 'application'))?></p>
<div class="col-xs-3">
<?php
echo Menu::widget([
	'options'=>['class'=>['sidebar-menu right side-nav']],
    'items' => [
        ['label' => 'Home', 'url' => ['site/index'],'encodeLabels'=>true,],
        ['label' => 'Products', 'url' => ['product/index'], 'items' => [
            ['label' => 'New Arrivals', 'url' => ['product/index', 'tag' => 'new']],
            ['label' => 'Most Popular', 'url' => ['product/index', 'tag' => 'popular']],
        ]],
        ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
    ],
]);

?>
</div>
