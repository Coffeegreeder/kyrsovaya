<?php
namespace app\models;
use Yii;
use yii\db\ActiveRecord;

class search extends ActiveRecord{
	public function getTovari(){
		return $this->hasOne(tovari::className(),['id'=>'id_tovara']);
	}
}	