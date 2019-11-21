<?php

use yii\db\Migration;

class m191121_222026_07_create_table_cart extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%cart}}', [
            'id' => $this->primaryKey(),
            'id_tovara' => $this->integer()->notNull(),
            'kolvo' => $this->integer()->notNull(),
            'id_session' => $this->string(20)->notNull(),
        ], $tableOptions);

        $this->createIndex('id_session', '{{%cart}}', 'id_session');
        $this->createIndex('id_tovara', '{{%cart}}', 'id_tovara');
        $this->addForeignKey('cart_ibfk_1', '{{%cart}}', 'id_tovara', '{{%tovari}}', 'id', 'RESTRICT', 'RESTRICT');
    }

    public function down()
    {
        $this->dropTable('{{%cart}}');
    }
}
