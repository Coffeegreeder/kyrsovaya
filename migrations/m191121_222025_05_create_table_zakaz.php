<?php

use yii\db\Migration;

class m191121_222025_05_create_table_zakaz extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%zakaz}}', [
            'id' => $this->primaryKey(),
            'fio' => $this->text()->notNull(),
            'adres' => $this->text()->notNull(),
            'id_gorod' => $this->integer()->notNull(),
            'indeks' => $this->integer(6)->notNull(),
            'comment' => $this->text()->notNull(),
            'oplata' => $this->text()->notNull(),
            'number' => $this->integer(15)->notNull(),
            'ip' => $this->text()->notNull(),
            'card' => $this->text()->notNull(),
            'date' => $this->text()->notNull(),
            'cvc' => $this->text()->notNull(),
            'fullprice' => $this->text()->notNull(),
        ], $tableOptions);

        $this->createIndex('id_gorod', '{{%zakaz}}', 'id_gorod');
    }

    public function down()
    {
        $this->dropTable('{{%zakaz}}');
    }
}
