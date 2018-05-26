<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use marqu3s\summernote\Summernote;
use marqu3s\summernote\SummernoteAsset;
use marqu3s\summernote\SummernoteLanguageAsset;

/* @var $this yii\web\View */
/* @var $model common\models\Tutorial */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tutorial-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'Id')->hiddenInput()->label(false) ?>

    <?= $form->field($model, 'Id_User')->hiddenInput()->label(false) ?>

    <?= $form->field($model, 'Id_Kategori')->hiddenInput()->label(false) ?>

    <?= $form->field($model, 'Isi_Artikel')->widget(Summernote::className(), [
    
    ]); ?>

    <?= $form->field($model, 'Status')->dropDownList([ 'Aktif' => 'Aktif', 'Nonaktif' => 'Nonaktif', ], ['prompt' => '']) ?>

    
    <?php
        echo $form->field($model, 'file')->widget(FileInput::classname(), [
            'options' => ['accept' => 'image/*'],
            'pluginOptions' => [
                'showCaption' => false,
                'showRemove' => false,
                'showUpload' => false,
                'browseClass' => 'btn btn-primary btn-block',
                'browseIcon' => '<i class="glyphicon glyphicon-camera"></i> ',
                'browseLabel' =>  'Pilih Gambar'
            ],
        ]);
    ?>

    <?php if ($model->Img_Artikel): ?> 
        <div class="form-group">
            <?= Html::img(['/file', 'id' => $model->Img_Artikel],['class' => 'img-responsive']) ?>
        </div>
    <?php endif; ?> 

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
