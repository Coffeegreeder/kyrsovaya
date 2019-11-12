<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\models\tovari;
use app\models\cart;
AppAsset::register($this);

?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>" style="overflow-x: hidden;">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <meta name="description" content="">
        <meta name="author" content="">
        <?php //$this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <link rel="shortcut icon" href="../web/images/favicon.ico" type="image/ico">
        <?php $this->head() ?>
    </head><!--/head-->
    <body>
<!--
    <?php $this->beginBody() ?>
    <?php
    if (class_exists('yii\debug\Module')) {
        $this->off(\yii\web\View::EVENT_END_BODY, [\yii\debug\Module::getInstance(), 'renderToolbar']);
    } ?>
    <?
    $cartkol=0;
    $ipus=Yii::$app->request->userIP;
    $hg=cart::find()->where(['id_session'=>$ipus])->all();
    foreach ($hg as $key) {
        $cartkol+=$key->kolvo;
    }

    ?>
-->

        <!-- Header -->
			<div id="header">
				<div class="top">
					<!-- Logo -->
						<div id="logo">
							<span class="image avatar48"><img src="../web/images/layout/avatar.jpg" alt="" /></span>
							<h1 id="title">Hollink</h1>
							<p>Каталог шаблонов и макетов</p><br>
							<p><strong>Товаров в карзине:</strong> <? echo $cartkol?> шт.</p>
						</div>
					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="/site/index#top" id="top-link"><span class="icon solid fa-home">Главная</span></a></li>
								<?php       if(Yii::$app->user->isGuest){
                                	echo ' <li><a href="/site/admin"><span>Войти</span></a></li>';
                            	}else{
                                	echo '';
                            	}?>
								<li><a href="/site/cart" id="contact-link"><span class="icon solid fa-envelope">Корзина</span></a></li>
								<li><a href="#portfolio" id="portfolio-link"><span class="icon solid fa-th">Каталог</span></a></li>
								<li><a href="/site/index#contact" id="about-link"><span class="icon solid fa-user">Контакты</span></a></li>
								<?php       if(!Yii::$app->user->isGuest){
                                	echo '<li><a href="exit"><span>Выйти</span></a></li>';
                                	echo '<li><a href="/site/adminpanel"><span>Панель</span></a></li>';
                            	}else{
                                	echo '';
                            	}?>
							</ul>
						<!-- Search -->
							<div class="">
                    			<form action="/site/index">
                            			<div class="search_box">
                                			<input type='text' id='a' name='search' placeholder='Поиск'>
                            			</div>
                            			<input type='submit' class='btnsub btn btn-primary'  type="button" value='Поиск' id='b'>
                    			</form>
                			</div>
						</nav>
					</div>
				<div class="bottom">

					<!-- Social Icons -->
						<ul class="icons">
							<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon brands fa-facetemplate-f"><span class="label">Facetemplate</span></a></li>
							<li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
							<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
							<li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
						</ul>

				</div>

			</div>
		<!-- Main -->
			<div id="main">
				<?= $content ?>
			</div>
		<!-- Footer -->
			<div id="footer">

				<!-- Copyright -->
					<ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li>
					</ul>

			</div>

<!--
    <div class="korzina">
        <strong>Товаров в корзине: </strong><? echo $cartkol?> шт.
        <br/><a href='/site/cart'>В корзину</a>
    </div>
-->

<!--
    <div class="header-middle">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="/site/index"><img src="../web/images/home/logo.png" alt="" /></a>
                         Сохранить в /images/home ваш логотип в формате png с названием logo 
                    </div>
                </div>
            </div>
        </div>
    </div>
-->




    


    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>