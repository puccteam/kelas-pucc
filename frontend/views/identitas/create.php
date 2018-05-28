<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\UserIdentitas */

// $this->title = 'Create User Identitas';
// $this->params['breadcrumbs'][] = ['label' => 'User Identitas', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
  $grav_url = "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $user->email) ) ) . "?d=wavatar&s=200";
?>
<div class="container" style="padding-top: 45px">
  <div class="user-identitas-create">

      <h1><?= Html::encode($this->title) ?></h1>
      <div class="img-profile">
         <img src="<?php echo $grav_url; ?>" alt="" style="display:block; margin:0 auto;"/>
      </div>

      <?= $this->render('_form', [
          'model' => $model,
      ]) ?>

  </div>
</div>
