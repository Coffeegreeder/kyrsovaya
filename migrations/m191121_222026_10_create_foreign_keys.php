<?php

use yii\db\Migration;

class m191121_222026_10_create_foreign_keys extends Migration
{
    public function up()
    {
        $this->addForeignKey('zakaz_ibfk_1', '{{%zakaz}}', 'id_gorod', '{{%gorod}}', 'id', 'RESTRICT', 'RESTRICT');
        $this->addForeignKey('limit_ibfk_2', '{{%limit}}', 'id_shop', '{{%shop}}', 'id', 'RESTRICT', 'RESTRICT');
    }

    public function down()
    {
        echo "m191121_222026_10_create_foreign_keys cannot be reverted.\n";
        return false;
    }
}
