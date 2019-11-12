<?php

namespace app\models;

use yii\db\ActiveRecord;

class tovari extends ActiveRecord
{
	public function Rules(){
		return[
		[['name','price','id_tag','opisanie'],'required']
            ,['foto','file']
		];
	}
	public function attributeLabels(){
		return [
		'foto'=>'Название фото',
		'name'=>'Название',
		'price'=>'Цена',
		'id_tag'=>'Категория',
		'opisanie'=>'Описание',
		];
	}

	public function getTag(){
		return $this->hasOne(tag::className(),['id'=>'id_tag']);
	}
	public function getlimit(){
		return $this->hasOne(limit::className(),['id_tovara'=>'id']);
	}

}