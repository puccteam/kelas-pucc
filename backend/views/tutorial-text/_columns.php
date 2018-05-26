<?php
use yii\helpers\Url;
use yii\helpers\HtmlPurifier;

return [
    // [
    //     'class' => 'kartik\grid\CheckboxColumn',
    //     'width' => '20px',
    // ],
    [
        'class' => 'kartik\grid\SerialColumn',
        'width' => '30px',
    ],
        [
        'class'=>'\kartik\grid\DataColumn',
        'header' => 'Judul Tutorial Text',
        'attribute'=>'Id',
        'value' => 'judulTutorial.Judul_Tutorial'
    ],
    // [
    //     'class'=>'\kartik\grid\DataColumn',
    //     'attribute'=>'Id_User',
    // ],
    // [
    //     'class'=>'\kartik\grid\DataColumn',
    //     'attribute'=>'Id_Kategori',
    // ],
    // [
    //     'class'=>'\kartik\grid\DataColumn',
    //     'header' => 'Judul Tutorial',
    //     'attribute'=>'Nm_Artikel',
    // ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'format' => 'raw',
        'attribute'=>'Isi_Artikel',
        // 'value' => function($model){
        //     $text = HtmlPurifier::process($model->Isi_Artikel, [
        //     'Attr.EnableID' => true,
        // ]);
        //     return $text;
        // }
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'Status',
    ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'Img_Artikel',
    // ],
    [
        'class' => 'kartik\grid\ActionColumn',
        'dropdown' => false,
        'vAlign'=>'middle',
        'urlCreator' => function($action, $model, $key, $index) { 
                return Url::to([$action,'Id' => $model->Id, 'Id_User' => $model->Id_User, 'Id_Kategori' => $model->Id_Kategori]);
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