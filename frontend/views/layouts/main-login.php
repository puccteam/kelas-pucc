<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
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

  <div id="login">
      <img src="../img/roket-asap-biru.png" alt="" style="z-index:-1">
   <!--    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Registrasi akun anda berhasil</strong> Silahkan cek email anda untuk melakukan aktivasi akun.
      </div> -->
    <div class="container">
      <div class="row">
        <div class="col-md-5 col-md-offset-6">
          <h1 class="text-center">Kelas PUCC</h1>
          <hr>
<!--           <div class="social-login">
            <button class="btn btn-primary" type="button" name="button">
              <i class="fa fa-facebook-official" aria-hidden="true"></i>
              <span>Login with Facebook</span>
            </button>

            <button class="btn btn-danger" type="button" name="button">
              <i class="fa fa-google-plus-square" aria-hidden="true"></i>
              <span>Login with Facebook</span>
            </button>
          </div> -->

          <p class="text-center">or</p>
          <!-- form login -->
            <?= $content ?>
          <!-- end form login -->
          <p style="margin-top:15px">Belum mempunyai akun? <a href="#">Register</a></p>
        </div>
      </div>

        </div>
      </div>
    </div>
  </div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
