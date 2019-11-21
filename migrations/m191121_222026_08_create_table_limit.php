<?php

use yii\db\Migration;

class m191121_222026_08_create_table_limit extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%limit}}', [
            'id' => $this->primaryKey(),
            'id_tovara' => $this->integer()->notNull(),
            'id_shop' => $this->integer()->notNull(),
            'kolvo' => $this->text()->notNull(),
        ], $tableOptions);

        $this->createIndex('id_tovara', '{{%limit}}', 'id_tovara');
        $this->createIndex('id_shop', '{{%limit}}', 'id_shop');
        $this->addForeignKey('limit_ibfk_1', '{{%limit}}', 'id_tovara', '{{%tovari}}', 'id', 'RESTRICT', 'RESTRICT');
    }

    public function down()
    {
        $this->dropTable('{{%limit}}');
    }
}
