<?php
namespace app\models;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
?>	
<?php $this->title = "Редактирование рекомендуемых"; ?>
<div>
	<h1 style='color: #FE980F;font-size: 34px;font-weight: 700;margin: 0 auto 30px;text-align: center;text-transform: uppercase;position: relative;z-index: 3;'>Рекомендуемые</h1>
	<div class='panel1'>
		<?php 
			$form=ActiveForm::begin([
				"action"=>"/site/redrec",
				"method"=>"post",
				]);
			for ($i=1; $i < 5; $i++) { 
				echo $form->field($new, 'id_tovara['.$i.']')->dropDownList(ArrayHelper::map(tovari::find()->all(),'id','name'));
			}
			echo Html::submitButton('Обновить',['class'=>'btnsub']);
			ActiveForm::end();
		 ?>
	</div>
</div>