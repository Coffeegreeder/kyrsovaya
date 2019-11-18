<?php

use yii\db\Migration;

class m191118_182922_09_create_table_recomended extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%recomended}}', [
            'id' => $this->primaryKey(),
            'id_tovara' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->createIndex('id_tovara', '{{%recomended}}', 'id_tovara');
        $this->addForeignKey('recomended_ibfk_1', '{{%recomended}}', 'id_tovara', '{{%tovari}}', 'id', 'RESTRICT', 'RESTRICT');
    }

    public function down()
    {
        $this->dropTable('{{%recomended}}');
    }
}
