<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\UserIdentitas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-identitas-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="col-md-12">
      <?= $form->field($model, 'nama_lengkap')->textInput(['maxlength' => true]) ?>
    </div>

    <div class="col-md-6">
      <?= $form->field($model, 'kota_asal')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">
      <?= $form->field($model, 'provinsi')->textInput(['maxlength' => true]) ?>
    </div>

    <div class="col-md-12">
      <?= $form->field($model, 'profile')->textInput(['maxlength' => true])->label('Bio') ?>
    </div>

    <div class="col-md-12">
      <?= $form->field($model, 'facebook_link')->textInput(['maxlength' => true]) ?>
    </div>

    <div class="col-md-12">
      <?= $form->field($model, 'twitter_link')->textInput(['maxlength' => true]) ?>
    </div>

    <div class="col-md-12">
      <?= $form->field($model, 'instagram_link')->textInput(['maxlength' => true]) ?>
    </div>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
