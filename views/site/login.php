<?php 

/* @var $this yii\web\View */ 
/* @var $form yii\bootstrap\ActiveForm */ 
/* @var $model app\models\LoginForm */ 

use yii\helpers\Html; 
use yii\bootstrap\ActiveForm; 

$this->title = 'Авторизация'; 
$this->params['breadcrumbs'][] = $this->title; 
?> 

<?php $this->title = "Авторизация"; ?>
<div class="login"> 
<h1>Авторизация</h1> 

<li>Введите логин и пароль</li> 

<?php $form = ActiveForm::begin([ 
'id' => 'login-form', 
'layout' => 'horizontal', 

]); ?> 

<?= $form->field($model, 'username')->textInput()->label('Логин',['class'=>'loginuser']) ?> 

<?= $form->field($model, 'password')->passwordInput()->label('Пароль',['class'=>'loginpass']) ?> 

<div class="col-lg-offset-1 col-lg-11"> 
<?= Html::submitButton('Войти', ['class' => 'login-button', 'name' => 'login-button']) ?>  
</div> 

<?php ActiveForm::end(); ?> 

</div>