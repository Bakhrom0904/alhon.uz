<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%mahsulotlar}}`.
 */
class m220910_171855_create_mahsulotlar_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%mahsulotlar}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'foto' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%mahsulotlar}}');
    }
}
