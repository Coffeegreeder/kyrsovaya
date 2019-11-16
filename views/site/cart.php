<?php
namespace app\models;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
?>
<?php $this->title = "Корзина"; ?>
<section id="cart_items" class="four">
	<div class="container">
	<div class="shopper-informations">
		<header>
			<h2>Корзина</h2>
		</header>
		<table class='row'>
			<tr><td><h2>Обложка:</h2></td><td><h2>Название:</h2></td><td><h2>Количество:</h2></td><td><h2>Цена:</h2></td><tr>
				<?php 
				$nom=0;
				if (empty($model)) {
					echo '<tr><td colspan="4"><h1 style="text-align: center">Корзина пустая</h1></td></tr>';
				}
					foreach ($model as $el) {
					$fullprice+=$el->tovari->price*$el->kolvo;
					echo "<tr ><td><div style='background: url(\"".$el->tovari->foto."\") no-repeat; background-size: 100px; background-position: center; height: 250px;'></div></td>
					<td>".$el->tovari->name."</td>
					<td><button class='btnminus' onclick='location.href=\"minus?id=".$el->id."\"'>-</button><h4 class='kolvo'>".$el->kolvo."</h4><button class='btnplus' onclick='location.href=\"plus?id=".$el->id."\"'>+</button></td>
					<td>".$el->tovari->price." руб.</td>
					<td><button class='btndel' onclick='location.href=\"deletetov?id=".$el->id."\"'>X</button>";
					$nom++;
					}
					echo "</table>";
					echo "<table class='cartrf' border='1px'>";
				echo "<tr><td><h2>Полная стоимость:</h2></td><td><h3>".$fullprice." руб.</h3></td>";
				?>
		</table>
		</div>
	</div>
</section>
<section class="four">
<div class='zakaz'>
	<div class="container">
		<div class="shopper-informations">
					
						<?php



							$form=ActiveForm::begin([
								"action"=>"zakaz?fullprice=".$fullprice,
								"method"=>"post",
								"options"=>["class"=>"formone"],
								]);
						?>
							<div id='a'><?= $form->field($model1,'fio')->textInput(['class'=>'','placeholder' => 'ФИО'])?>
							<?= $form->field($model1,'number')->input('tel',['class'=>'','placeholder' => "+79111234567"])?></div>									
								

							<?= Html::submitButton('Перейти к оплате',['class'=>'btnbuy','id'=>''])?>
						<?php
							ActiveForm::end();
						?>
						</div>
	</div>
</div>
</section>	