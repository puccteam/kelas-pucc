<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\SubTutorialTugas */
?>
<div class="sub-tutorial-tugas-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Id',
            'Id_Kategori',
            'Id_User',
            'Soal:ntext',
            'Copy_Soal',
            'Status',
        ],
    ]) ?>

</div>
