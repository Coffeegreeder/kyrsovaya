<?php

namespace app\models;

use yii\db\ActiveRecord;

class limit extends ActiveRecord{
	public function getTovari(){
		return $this->hasOne(tovari::className(),['id'=>'id_tovara']);
	}
	public function getShop(){
		return $this->hasOne(shop::className(),['id'=>'id_shop']);
	}
	public function attributeLabels(){
		return [
		'id_shop'=>'Выбор магазина',
		];	
	}
}