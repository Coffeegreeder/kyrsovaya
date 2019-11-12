<?php 

namespace app\models; 

use Yii; 
use yii\base\Model; 

/** 
* LoginForm is the model behind the login form. 
* 
* @property User|null $user This property is read-only. 
* 
*/ 
class LoginForm extends Model 
{ 
public $username; 
public $password; 

private $_user = false; 



/** 
* @return array the validation rules. 
*/ 
public function rules() 
{ 
return [ 
// username and password are both required 

// password is validated by validatePassword() 
['password', 'validatePassword'], 

['username', 'required', 'message' => 'логин не может быть пустым'], 
['password', 'required', 'message' => 'пароль не может быть пустым'], 
]; 
} 


public function validatePassword($attribute, $params) 
{ 
if (!$this->hasErrors()) { 
$user = $this->getUser(); 

if (!$user || !$user->validatePassword($this->password)) { 
$this->addError($attribute, 'Неправильный логин или пароль'); 
} 
} 
} 


public function login() 
{ 
if ($this->validate()) { 

return Yii::$app->user->login($this->getUser()); 
} 
return false; 
} 


public function getUser() 
{ 
if ($this->_user === false) { 
$this->_user = User::findByUsername($this->username); 
} 

return $this->_user; 
} 
}