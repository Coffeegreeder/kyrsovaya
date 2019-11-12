<?php $this->title = "Редактирование товаров"; ?>
<section>
		<div class="container">
			<div class="row">
				<?php
					echo "<h1 style='color: #FE980F;font-size: 34px;font-weight: 700;margin: 0 auto 30px;text-align: center;text-transform: uppercase;position: relative;z-index: 3;'>Товары</h1>";
					foreach ($model as $yel) {
						foreach ($model2 as $key) {
                            if ($key->id_tovara==$yel->id) {
                                $fullkolvo+= $yel->limit->kolvo;
                            }
                        }
					    echo "<div class='tovar'>";
					        echo "<div class='oblojka'>";
								echo '<img src="'.$yel->foto.'">';
					        echo "</div>";              			
							echo '<h2>'.$yel->name.'</h2>';
					        echo '<p>Описание: '.$yel->opisanie.'</p>';
					        echo '<p>Категория: '.$yel->tag->tag.'</p>';
					        echo '<h4>Цена: '.$yel->price.' руб.</h4>';
					        if(!Yii::$app->user->isGuest){ 
					            echo '<div class="redtov">
					            <a href="redknig?id='.$yel->id.'">Редактировать</a>
					            </div>';
					            }  
					            else{ 
					            echo ''; 
					            } 
					        echo '<button>В корзину</button>';
					    echo "</div>"; 
					    }    
				?>
			</div>
		</div>
	</div>
</section>
<div class="pagenavig">
	<?php
	    use yii\widgets\LinkPager;
	    echo LinkPager::widget([
	    'pagination' => $pages,
	    ]);
	?>			
</div>