<?php

use yii\db\Migration;

class m191112_173738_01_create_table_admin extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%admin}}', [
            'id' => $this->primaryKey(50),
            'username' => $this->string(225)->notNull(),
            'password' => $this->string(225)->notNull(),
            'role' => $this->string(),
        ], $tableOptions);

    }

    public function down()
    {
        $this->dropTable('{{%admin}}');
    }
}
