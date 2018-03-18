<?php
use yii\helpers\Url;
use yii\helpers\Html;

return [
    [
        'class' => 'kartik\grid\SerialColumn',
        'width' => '30px',
    ],
        [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'Id',
    ],
    // [
    //     'class'=>'\kartik\grid\DataColumn',
    //     'attribute'=>'Id_Kategori',
    // ],
    // [
    //     'class'=>'\kartik\grid\DataColumn',
    //     'attribute'=>'Id_User',
    // ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'Judul_Tutorial',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'Status',
    ],

    [
        'class' => 'kartik\grid\ActionColumn',
        'header' => 'Text',
        'template' => '{TutorialText}',
        'buttons' => [
            "TutorialText" => function ($url, $model, $key) {
                return Html::a('Text', ['tutorial-text/index', 'Id' => $model->Id, 'Id_Kategori' => $model->Id_Kategori], ['class' => 'btn btn-primary', 'data-pjax' => '0']);
            }
        ]
    ],
    [
        'class' => 'kartik\grid\ActionColumn',
        'header' => 'Video',
        'template' => '{TutorialVideo}',
        'buttons' => [
            "TutorialVideo" => function ($url, $model, $key) {
                return Html::a('Video', ['tutorial-video/index', 'Id' => $model->Id, 'Id_Kategori' => $model->Id_Kategori], ['class' => 'btn btn-primary', 'data-pjax' => '0']);
            }
        ]
    ],
    [
        'class' => 'kartik\grid\ActionColumn',
        'header' => 'Tugas',
        'template' => '{TutorialTugas}',
        'buttons' => [
            "TutorialTugas" => function ($url, $model, $key) {
                return Html::a('Tugas', ['tutorial-tugas/index', 'Id' => $model->Id, 'Id_Kategori' => $model->Id_Kategori], ['class' => 'btn btn-primary', 'data-pjax' => '0']);
            }
        ]
    ],
    [
        'class' => 'kartik\grid\ActionColumn',
        'dropdown' => false,
        'vAlign'=>'middle',
        'urlCreator' => function($action, $model, $key, $index) { 
                return Url::to([$action,'Id' => $model->Id, 'Id_Kategori' => $model->Id_Kategori, 'Id_User' => $model->Id_User]);
        },
        'viewOptions'=>['role'=>'modal-remote','title'=>'View','data-toggle'=>'tooltip'],
        'updateOptions'=>['role'=>'modal-remote','title'=>'Update', 'data-toggle'=>'tooltip'],
        'deleteOptions'=>['role'=>'modal-remote','title'=>'Delete', 
                          'data-confirm'=>false, 'data-method'=>false,// for overide yii data api
                          'data-request-method'=>'post',
                          'data-toggle'=>'tooltip',
                          'data-confirm-title'=>'Are you sure?',
                          'data-confirm-message'=>'Are you sure want to delete this item'], 
    ],

];   