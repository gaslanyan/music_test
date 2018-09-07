<?php

use yii\db\Migration;

/**
 * Handles the creation of table `singers`.
 */
class m180906_131338_create_singers_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('singers', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('singers');
    }
}
