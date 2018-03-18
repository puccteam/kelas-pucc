<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\SubTutorialVideo */
?>
<div class="sub-tutorial-video-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Id',
            'Id_Kategori',
            'Id_User',
            'Url_Video:url',
            'Status',
        ],
    ]) ?>

</div>
