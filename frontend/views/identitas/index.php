<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\UserIdentitasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'User Identitas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-identitas-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create User Identitas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'username',
            'nama_lengkap',
            'provinsi',
            'kota_asal',
            'email:email',
            //'no_telp',
            //'profile',
            //'facebook_link',
            //'twitter_link',
            //'instagram_link',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
