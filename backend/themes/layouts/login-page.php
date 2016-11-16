<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\LoginAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

LoginAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <div class="container">

        <?= $content ?>

<<<<<<< HEAD

=======
        
>>>>>>> 60dd1fa5438160ec8cf17eef1f220b115c17de64
    </div>
</div>

<footer class="footer">
    <div class="container">
<<<<<<< HEAD
        <p class="align-center">&copy; Emannuel Church  2013 - <?= date('Y') ?></p>
=======
        <p class="pull-left">&copy; Emannuel Church  2013 - <?= date('Y') ?></p>
>>>>>>> 60dd1fa5438160ec8cf17eef1f220b115c17de64

    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
