<?php

use yii\db\Migration;

class m191112_173738_02_create_table_email extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%email}}', [
            'id' => $this->primaryKey(10),
            'name' => $this->text()->notNull(),
            'email' => $this->text()->notNull(),
            'message' => $this->text()->notNull(),
        ], $tableOptions);

    }

    public function down()
    {
        $this->dropTable('{{%email}}');
    }
}
