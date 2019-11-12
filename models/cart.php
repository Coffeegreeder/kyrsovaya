<?php
namespace app\models;
use Yii;
use yii\db\ActiveRecord;

class Cart extends ActiveRecord{
	public function Rules(){
		return[
		// [['id_tovara','price','id_session'],'required'],
		];
	}

	public function attributeLabels(){
		return [
		'price'=>'Цена',
		];
	}
	public function getTovari(){
		return $this->hasOne(tovari::className(),['id'=>'id_tovara']);
	}	
}