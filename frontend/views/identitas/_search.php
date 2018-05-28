<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\UserIdentitasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-identitas-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'username') ?>

    <?= $form->field($model, 'nama_lengkap') ?>

    <?= $form->field($model, 'provinsi') ?>

    <?= $form->field($model, 'kota_asal') ?>

    <?= $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'no_telp') ?>

    <?php // echo $form->field($model, 'profile') ?>

    <?php // echo $form->field($model, 'facebook_link') ?>

    <?php // echo $form->field($model, 'twitter_link') ?>

    <?php // echo $form->field($model, 'instagram_link') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
