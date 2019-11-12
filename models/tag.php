<?php

namespace app\models;

use yii\db\ActiveRecord;

class tag extends ActiveRecord
{
	public function Rules(){
		return[
		[['tag'],'required']
		];
	}
	public function attributeLabels(){
		return [
		'tag'=>'Категория'
		];
	}
}