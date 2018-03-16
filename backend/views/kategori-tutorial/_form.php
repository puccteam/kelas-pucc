<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\KategoriTutorial */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kategori-tutorial-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Id_User')->textInput() ?>

    <?= $form->field($model, 'Nm_Kategori')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Status')->dropDownList([ 'aktif' => 'Aktif', 'nonaktif' => 'Nonaktif', ], ['prompt' => '']) ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
