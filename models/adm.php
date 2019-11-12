<?php

namespace app\models;

use yii\db\ActiveRecord;

class Adm extends ActiveRecord{
	public function getZakaz(){
		return $this->hasOne(zakaz::className(),['id'=>'id_zakaza']);
	}
	public function getTovari(){
		return $this->hasOne(tovari::className(),['id'=>'id_tovara']);
	}
	public function getlimit(){
		return $this->hasOne(limit::className(),['id'=>'id_tovara']);
	}
}