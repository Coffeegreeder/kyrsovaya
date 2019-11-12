<?php
namespace app\models;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
?>	
<?php $this->title = "Добавление шаблона"; ?>
<section class="four">
	<div class="container">
		<header>
			<h2>Добавление шаблона</h2>
		</header>
		<?php
			$form=ActiveForm::begin([
				"action"=>"addbook",
				"method"=>"post",
				"options"=>["enctype"=>"multipart/form-data"],
			]);
		?>
		<?= $form->field($model,'foto')->fileInput(['class'=>'col-6 col-12-mobile'])?></br>
		<?= $form->field($model,'name')->textInput(['class'=>'col-6 col-12-mobile','placeholder' => "Название"])?></br>
		<div class="col-12">
			<?= $form->field($model,'opisanie')->textarea(['class'=>'bookaddop','rows'=>'5','placeholder' => "Описание"])?>
		</div>
		<?= $form->field($model,'id_tag')->dropDownList(ArrayHelper::map(tag::find()->all(),'id','tag'),['class'=>'bookaddja','placeholder' => "Категория"])?>
		<?= $form->field($model,'price')->textInput(['class'=>'col-6 col-12-mobile','placeholder' => "Цена"])?>
		<div class="col-12">
			<?= Html::submitButton('Добавить шаблон',['class'=>'btnsub'])?>
		</div>	
		<?php
			ActiveForm::end();
		?>
	</div>	
</section>	