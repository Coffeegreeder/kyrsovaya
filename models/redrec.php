<?php

namespace app\models;

use yii\db\ActiveRecord;

class Redrec extends ActiveRecord{
	public static function tableName(){
		return 'recomended';
	}

	public function attributeLabels(){
		return [
		'id_tovara'=>'Выберите товар',
		];
	}

	public function getTovari(){
		return $this->hasOne(tovari::className(),['id'=>'id_tovara']);
	}
}