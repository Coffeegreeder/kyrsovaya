<?php
namespace app\models;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use Yii;
?>  
<?php $this->title = "Товары"; ?>
				<!-- Intro -->
					<section id="top" class="one dark cover">
						<div class="container">

							<header>
								<a href="/site/index"><h6>Hollink</h6></a>
								<p>Добро пожаловать в каталог шаблонов для сайтов!</p>
							</header>

							<footer>
								<a href="#portfolio" class="button scrolly">Смотреть</a>
							</footer>

						</div>
					</section>
					
					<!-- Categoties -->
					<section id="about" class="three">
						<div class="container">

							<header>
								<h2>Категории</h2>
							</header>

							<a href="#" class="image featured"><img src="../web/images/layout/pic08.jpg" alt="" /></a>

							<p> <?php 
                        echo "<div class='panel-group category-products' id='accordian'>";
                            echo "<div class='panel panel-default'>";
                                echo "<div class='panel-heading'>";
                                    echo "<h3 class='panel-title'><a href='index'</a>Все виды</h3>";
                                echo "</div>";    
                            echo "</div>";
                        foreach ($model1 as $yel) {
                            echo "<div class='panel panel-default'>";
                                echo "<div class='panel-heading'>";
                                    echo "<h3 class='panel-title'><a href='index?tag=".$yel->id."'>".$yel->tag."</a></h3>";
                                echo "</div>";    
                            echo "</div>";
                            }
                              
                        ?></p>

						</div>
					</section>

				<!-- Catalog -->
					<section id="portfolio" class="two">
						<div class="container">

							<header>
								<h2>Каталог</h2>
							</header>

							<p>Представляем вам на выбор разнообразные виды шаблонов. Здесь вы можете найти шаблон для любого типа сайта!</p>

							<div class="row">
							
							<?php 
                        foreach ($model as $yel) {
                            $fullkolvo=0;
                            foreach ($model2 as $key) {
                                if ($key->id_tovara==$yel->id) {
                                    $fullkolvo+= $key->kolvo;
                                }
                            }
                            echo '<div class="col-4 col-12-mobile">
							<article class="item">
										<a href="#" class="image fit"><img src="../web/images/layout/pic02.jpg" alt="" /></a>
										<header>
											<h2>'.$yel->name.'</h2>
											<p>Жанр: '.$yel->tag->tag.'</p>
											<h4>Цена: '.$yel->price.' руб.</h4>';
											if(!Yii::$app->user->isGuest){ 
												echo '<div class="redtov">
																<a href="redknig?id='.$yel->id.'">Редактировать</a>
														</div>';
											}else{ 
												echo '<button  class="btn btn-primary"  onclick="location.href=\'addcart?id='.$yel->id.'\'">В корзину</button>';
											}
											echo '</header>
										 </article>
									</div>';
                            }?>
						</div>
					</section>

				<!-- Contact -->
					<section id="contact" class="four">
						<div class="container">

							<header>
								<h2>Связь с нами</h2>
							</header>

							<p>Вы можете заказать уникальный шаблон у нас напрямую, оставив свою заявку на сайте!</p>

							<form method="post" action="#">
								<div class="row">
									<div class="col-6 col-12-mobile"><input type="text" name="name" placeholder="Ваше Имя" /></div>
									<div class="col-6 col-12-mobile"><input type="text" name="email" placeholder="Ваш E-mail" /></div>
									<div class="col-12">
										<textarea name="message" placeholder="Сообщение"></textarea>
									</div>
									<div class="col-12">
										<input type="submit" value="Оставить заявку" />
									</div>
								</div>
							</form>

						</div>
					</section>
	<!-- Scripts -->
<!--
			<script src="../web/js/layout/jquery.min.js"></script>
			<script src="../web/js/layout/jquery.scrolly.min.js"></script>
			<script src="../web/js/layout/jquery.scrollex.min.js"></script>
			<script src="../web/js/layout/browser.min.js"></script>
			<script src="../web/js/layout/breakpoints.min.js"></script>
			<script src="../web/js/layout/util.js"></script>
			<script src="../web/js/layout/main.js"></script>
-->
    <?php
        use yii\widgets\LinkPager;
        echo LinkPager::widget([
        'pagination' => $pages,
        ]);
    ?>