<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%contact}}`.
 */
class m220901_033118_add_status_column_to_contact_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%contact}}', 'status', $this->integer()->defaultValue(0));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%contact}}', 'status');
    }
}
