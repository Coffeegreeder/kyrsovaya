<?php
namespace app\models;
use Yii;
use yii\db\ActiveRecord;

class zakaz extends ActiveRecord{
	public function Rules(){
		return[
		[['fio','adres','id_gorod','indeks','oplata','number','comment'],'required', 'message'=>'Заполните это поле'],
		];
	}
	public function attributeLabels(){
		return [
		'fio'=>'ФИО',
		'adres'=>'Адрес',
		'id_gorod'=>'Город',
		'indeks'=>'Индекс',
		'comment'=>'Комментарий к заказу',
		'oplata'=>'Метод оплаты',
		'number'=>'Номер',
		'card'=>'Номер карты',
		'date'=>'Срок окончания действия',
		'cvc'=>'CVC код',
		];
	}

	public function getGorod(){
		return $this->hasOne(gorod::className(),['id'=>'id_gorod']);
	}
	public function getlimit(){
		return $this->hasOne(limit::className(),['id_tovara'=>'id']);
	}	
}