<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
?>	
<?php $this->title = "Добавить тэг"; ?>
		<section id="top" class="one dark cover">
			<div class="container">
				<header>
					<h2>Добавить тэг</h2>
					<p>Добавление новых тэгов позволит улучшить <br>
					поиск конкретного шаблона для пользователей.</p>
					<?php
						$form=ActiveForm::begin([
							"action"=>"tagadds",
							"method"=>"post",
						]);
					?>
					<?= $form->field($model,'tag')->textInput(['class'=>'templateadd','placeholder' => "Название"])?>
				</header>	
				<footer>
					<?= Html::submitButton('Добавить',['class'=>'btnsub'])?>
					<?php
						ActiveForm::end();
					?>
				</footer>
			</div>
		</section>