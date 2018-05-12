<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\KategoriTutorial */
?>
<div class="kategori-tutorial-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Id',
            'Id_User',
            'Nm_Kategori',
            'Status',
            'Gambar',
            'Deskripsi:ntext',
            'Level',
            'slug',
        ],
    ]) ?>

</div>
