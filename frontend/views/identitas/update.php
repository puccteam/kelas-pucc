<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\UserIdentitas */

$this->title = 'Update User Identitas: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'User Identitas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->username, 'url' => ['view', 'id' => $model->username]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-identitas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
