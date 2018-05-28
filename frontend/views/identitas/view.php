<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\UserIdentitas */

$this->title = $model->username;
$this->params['breadcrumbs'][] = ['label' => 'User Identitas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-identitas-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->username], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->username], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'username',
            'nama_lengkap',
            'provinsi',
            'kota_asal',
            'email:email',
            'no_telp',
            'profile',
            'facebook_link',
            'twitter_link',
            'instagram_link',
        ],
    ]) ?>

</div>
