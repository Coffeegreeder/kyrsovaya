<?php

namespace app\models;

use yii\db\ActiveRecord;

class gorod extends ActiveRecord
{
	public function Rules(){
		return[
		[['name'],'required']
		];
	}
}