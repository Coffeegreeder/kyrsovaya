<?php

use yii\db\Migration;

class m191112_173738_03_create_table_tag extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tag}}', [
            'id' => $this->primaryKey(),
            'tag' => $this->text()->notNull(),
        ], $tableOptions);

    }

    public function down()
    {
        $this->dropTable('{{%tag}}');
    }
}
