<?php
namespace app\models;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
$this->title = "Редактирование товара";

echo '<div class="panel1">';
	$form=ActiveForm::begin([
					"action"=>"redknig?id=".$model->id,
					"method"=>"post",
					"options"=>["enctype"=>"multipart/form-data"],
					]);
	?>
				<?= $form->field($model,'foto')->fileInput(['class'=>'templateadd'])?>
				<?= $form->field($model,'name')->textInput(['class'=>'templateadd','placeholder' => "Название"])?>
				<?= $form->field($model,'opisanie')->textarea(['class'=>'templateaddop','rows'=>'5','placeholder' => "Описание"])?>
				<?= $form->field($model,'id_tag')->dropDownList(ArrayHelper::map(tag::find()->all(),'id','tag'),['class'=>'templateaddja','placeholder' => "Категория"])?>
				<?= $form->field($model,'price')->textInput(['class'=>'templateadd','placeholder' => "Цена"])?>
				
				<?= Html::submitButton('Изменить товар',['class'=>'btnsub'])?>
		<?php
			ActiveForm::end();
		?>
</div>