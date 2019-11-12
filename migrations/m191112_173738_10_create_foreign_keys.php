<?php

use yii\db\Migration;

class m191112_173738_10_create_foreign_keys extends Migration
{
    public function up()
    {
        $this->addForeignKey('zakaz_ibfk_1', '{{%zakaz}}', 'id_gorod', '{{%gorod}}', 'id', 'RESTRICT', 'RESTRICT');
        $this->addForeignKey('limit_ibfk_2', '{{%limit}}', 'id_shop', '{{%shop}}', 'id', 'RESTRICT', 'RESTRICT');
    }

    public function down()
    {
        echo "m191112_173738_10_create_foreign_keys cannot be reverted.\n";
        return false;
    }
}
