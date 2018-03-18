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
            // 'Id_Kategori',
            // 'Id_User',
            'Judul_Tutorial',
            'Status',
        ],
    ]) ?>

</div>
