<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Tutorial */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tutorial-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Id')->textInput() ?>

    <?= $form->field($model, 'Id_User')->textInput() ?>

    <?= $form->field($model, 'Id_Kategori')->textInput() ?>

    <?= $form->field($model, 'Nm_Artikel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Isi_Artikel')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Status')->dropDownList([ 'Aktif' => 'Aktif', 'Nonaktif' => 'Nonaktif', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'Img_Artikel')->textInput(['maxlength' => true]) ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
