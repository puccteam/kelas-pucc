<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use marqu3s\summernote\Summernote;
use marqu3s\summernote\SummernoteAsset;
use marqu3s\summernote\SummernoteLanguageAsset;

/* @var $this yii\web\View */
/* @var $model common\models\KategoriTutorial */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kategori-tutorial-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Nm_Kategori')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'Deskripsi')->widget(Summernote::className(), [
    
    ]); ?>

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


    <?php if ($model->Gambar): ?> 
        <div class="form-group">
            <?= Html::img(['/file', 'id' => $model->Gambar],['class' => 'img-responsive']) ?>
        </div>
    <?php endif; ?> 

    <?= $form->field($model, 'Level')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'Status')->dropDownList([ 'aktif' => 'Aktif', 'nonaktif' => 'Nonaktif', ], ['prompt' => '']) ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
