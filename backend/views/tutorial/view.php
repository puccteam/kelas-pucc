<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Tutorial */
?>
<div class="tutorial-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Id',
            'Id_User',
            'Id_Kategori',
            'Nm_Artikel',
            'Isi_Artikel:ntext',
            'Status',
            'Img_Artikel',
        ],
    ]) ?>

</div>
