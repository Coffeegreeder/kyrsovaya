<?php

use yii\db\Migration;

class m191112_173738_04_create_table_tovari extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tovari}}', [
            'id' => $this->primaryKey(3),
            'foto' => $this->string(),
            'name' => $this->text()->notNull(),
            'price' => $this->integer()->notNull(),
            'id_tag' => $this->integer()->notNull(),
            'opisanie' => $this->text(),
        ], $tableOptions);

        $this->createIndex('id_janr', '{{%tovari}}', 'id_tag');
        $this->addForeignKey('tovari_ibfk_1', '{{%tovari}}', 'id_tag', '{{%tag}}', 'id', 'RESTRICT', 'RESTRICT');
    }

    public function down()
    {
        $this->dropTable('{{%tovari}}');
    }
}
