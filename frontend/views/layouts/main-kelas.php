<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\helpers\Url;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <!-- header -->
    <header style="position: fixed; z-index:999; background:white; width:100%">
      <div class="container">
        <div class="row container-header">
          <div class="col-md-3">
            <span class="logo float-left">
               <img src="../img/logo-pucc.png" alt="" style="width: 65px; margin-top: 5px">
            </span>
            <i class="fa fa-bars float-right" aria-hidden="true" onclick="showMenu()"></i>
          </div>
          <div class="col-md-9">
            <nav class="float-right">
              <ul class="biru-primary">
                <!-- <a href="index.html#home" class="page-scroll home"><li>Home</li></a>
                <a href="index.html#about" class="page-scroll about-us"><li>About Us</li></a>
                <a href="index.html#service"  class="page-scroll service"><li>Service</li></a>
                <a href="index.html#portfolio" class="page-scroll portfolio"><li >Portfolio</li></a>
                <a href="index.html#contact" class="page-scroll contact"><li >Contact</li></a> -->
                <?= Html::a('<li>Logout</li>', Url::to(['site/logout']), ['data-method' => 'POST', 'class' => 'page-scroll']) ?>
              </ul>
            </nav>
          </div>
        </div>

      </div>
    </header>

    <div class="menu-smarthphone">
      <div class="container">
        <div class="btn-close float-right">
          <i class="fa fa-times-circle" aria-hidden="true" onclick="hideMenu()"></i>
        </div>
        <div class="clear"></div>
        <ul class="biru-primary">
          <!-- <a href="index.html#home"  class="page-scroll" onclick="hideMenu()"><li>Home</li></a>
          <a href="index.html#about" class="page-scroll" onclick="hideMenu()"><li>About Us</li></a>
          <a href="index.html#service"  class="page-scroll" onclick="hideMenu()"><li>Service</li></a>
          <a href="index.html#portfolio" class="page-scroll" onclick="hideMenu()"><li >Portfolio</li></a>
          <a href="index.html#contact" class="page-scroll" onclick="hideMenu()"><li >Contact</li></a> -->
          <?= Html::a('<li>Logout</li>', Url::to(['site/logout']), ['data-method' => 'POST', 'class' => 'page-scroll']) ?>
        </ul>
      </div>
    </div>
    <!-- akhhir header -->

    <div class="page">
        <!-- <div class="container"> -->
            <?=$content ?>
        <!-- </div> -->
    <!-- Jumbotron  -->
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
