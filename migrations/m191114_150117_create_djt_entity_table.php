<?php

use yii\db\Migration;

/**
 * Handles the creation of table `soul_entity`.
 */
class m191114_150117_create_djt_entity_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $sql = file_get_contents('soul.sql');
        $this->execute($sql);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('soul_entity');
    }
}
