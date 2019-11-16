<?php
namespace app\models;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use app\models\tovari;
use Yii;


$this->title = "Просмотр шаблона $s";
?>

<!--<img scr="..">-->
<?php
foreach($stuff as $s){
	echo  '<section id="contact" class="four">
			<div class="container">
						<h2> '.$s["name"].'</h2>
						<img class="image featured" src="'.$s["foto"].'">
						<p>Описание:</br> '.$s["opisanie"].'</p>
						<h2> Стоимоть: '.$s["price"].'</h2>';
						if(!Yii::$app->user->isGuest){ 
							echo '<div class="redtov">
									<a href="redknig?id='.$s["id"].'">Редактировать</a>
								</div>';
							}else{ 
								echo '<button  class="btn btn-primary"  onclick="location.href=\'/site/addcart?id='.$s["id"].'\'">В корзину</button>';
							}
					echo '</div>
				</section>';
}
?>
