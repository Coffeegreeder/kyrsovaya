<?php

use yii\db\Migration;

class m191118_182922_06_create_table_adm extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%adm}}', [
            'id' => $this->primaryKey(),
            'id_zakaza' => $this->integer()->notNull(),
            'id_tovara' => $this->integer()->notNull(),
            'kolvo' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->createIndex('id_zakaza', '{{%adm}}', ['id_zakaza', 'id_tovara']);
        $this->createIndex('id_tovara', '{{%adm}}', 'id_tovara');
        $this->addForeignKey('adm_ibfk_1', '{{%adm}}', 'id_zakaza', '{{%zakaz}}', 'id', 'RESTRICT', 'RESTRICT');
        $this->addForeignKey('adm_ibfk_2', '{{%adm}}', 'id_tovara', '{{%tovari}}', 'id', 'RESTRICT', 'RESTRICT');
    }

    public function down()
    {
        $this->dropTable('{{%adm}}');
    }
}
