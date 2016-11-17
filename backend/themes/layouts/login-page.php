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
<<<<<<< HEAD

=======
        
>>>>>>> 60dd1fa5438160ec8cf17eef1f220b115c17de64
=======

>>>>>>> a1b157334444f96407dc3999c9bc37562ab2b5da
    </div>
</div>

<footer class="footer">
    <div class="container">
<<<<<<< HEAD
<<<<<<< HEAD
        <p class="align-center">&copy; Emannuel Church  2013 - <?= date('Y') ?></p>
=======
        <p class="pull-left">&copy; Emannuel Church  2013 - <?= date('Y') ?></p>
>>>>>>> 60dd1fa5438160ec8cf17eef1f220b115c17de64
=======
        <p class="align-center">&copy; Emannuel Church  2013 - <?= date('Y') ?></p>
>>>>>>> a1b157334444f96407dc3999c9bc37562ab2b5da

    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
