<?php

use yii\db\Migration;

/**
 * Handles the creation of table `type_lcp`.
 */
class m180906_131357_create_type_lcp_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('type_lcp', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('type_lcp');
    }
}
