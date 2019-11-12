<?php
namespace app\models;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
?>	
<?php $this->title = "Редактирование склада"; ?>
<div class='redskl'>
	<?php 
	echo '<div class="panel1">';
	$form=ActiveForm::begin([
		"action"=>"redlimit",
		"method"=>"post",
		]);
	?>
		<?= $form->field($model,'id_shop')->dropDownList(ArrayHelper::map(shop::find()->all(),'id','name'),['class'=>'templateadd','placeholder' => "Магазин"])?>
		<?= $form->field($model,'id_tovara')->dropDownList(ArrayHelper::map(tovari::find()->all(),'id','name'),['class'=>'templateaddja','placeholder' => "Книга"])?>
		<?= $form->field($model,'kolvo')->textInput(['class'=>'templateadd','placeholder' => "Количество"])?>
		
		<?= Html::submitButton('Сохранить',['class'=>'btnsub'])?>
		<?php
			ActiveForm::end();
		?>
</div>