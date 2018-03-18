<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SubTutorialVideo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sub-tutorial-video-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Id')->hiddenInput()->label(false) ?>

    <?= $form->field($model, 'Id_User')->hiddenInput()->label(false) ?>

    <?= $form->field($model, 'Id_Kategori')->hiddenInput()->label(false) ?>

    <?= $form->field($model, 'Url_Video')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Status')->dropDownList([ 'aktif' => 'Aktif', 'nonaktif' => 'Nonaktif', '' => '', ], ['prompt' => '']) ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
