<?php
use yii\helpers\Url;
use yii\helpers\Html;

return [
    // [
    //     'class' => 'kartik\grid\CheckboxColumn',
    //     'width' => '20px',
    // ],
    [
        'class' => 'kartik\grid\SerialColumn',
        'width' => '30px',
    ],
    //     [
    //     'class'=>'\kartik\grid\DataColumn',
    //     'attribute'=>'Id',
    // ],
    // [
    //     'class'=>'\kartik\grid\DataColumn',
    //     'attribute'=>'Id_User',
    // ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'header' => 'Judul Kategori Tutorial',
        'attribute'=>'Nm_Kategori',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'Status',
    ],
    [
        'class' => 'kartik\grid\ActionColumn',
        'header' => 'Tutorial',
        'template' => '{Tutorial}',
        'buttons' => [
            "Tutorial" => function ($url, $model, $key) {
                return Html::a('Tutorial', ['tutorial/index', 'Id' => $model->Id], ['class' => 'btn btn-primary', 'data-pjax' => '0']);
            }
        ]
    ],
    [
        'class' => 'kartik\grid\ActionColumn',
        'dropdown' => false,
        'vAlign'=>'middle',
        'urlCreator' => function($action, $model, $key, $index) { 
                return Url::to([$action,'Id' => $model->Id, 'Id_User' => $model->Id_User]);
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