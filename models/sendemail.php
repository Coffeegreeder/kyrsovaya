<?php
namespace app\models;
use Yii;
use yii\db\ActiveRecord;

class Sendemail extends ActiveRecord{
	public function rules(){
		return[
		[['name','email','message'],'required', 'message'=>'Заполните это поле'],
		];
	}
	public function attributeLabels(){
		return ['name'=>'Ваше имя','email'=>'Ваш адрес электронной почты','message'=>'Ваше сообщение'];
	}
	public static function tableName(){
		return 'email';
	}
}