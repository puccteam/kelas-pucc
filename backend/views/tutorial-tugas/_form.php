<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use marqu3s\summernote\Summernote;
use marqu3s\summernote\SummernoteAsset;
use marqu3s\summernote\SummernoteLanguageAsset;

/* @var $this yii\web\View */
/* @var $model common\models\SubTutorialTugas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sub-tutorial-tugas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Id')->textInput() ?>

    <?= $form->field($model, 'Id_Kategori')->textInput() ?>

    <?= $form->field($model, 'Id_User')->textInput() ?>

    <?= $form->field($model, 'Soal')->widget(Summernote::className(), [
    
    ]); ?>

    <?= $form->field($model, 'Status')->dropDownList([ 'aktif' => 'Aktif', 'nonaktif' => 'Nonaktif', '' => '', ], ['prompt' => '']) ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
