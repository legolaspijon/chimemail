<?php

use yii\db\Migration;

/**
 * Handles the creation of table `community_admin`.
 */
class m180115_143236_create_community_admin_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('{{%community_admin}}', [
            'id' => $this->primaryKey(),
            'community_id' => \yii\db\Schema::TYPE_INTEGER . '(11) NOT NULL',
            'user_id' => \yii\db\Schema::TYPE_INTEGER . '(11) NOT NULL',
            'is_community_admin' => 'TINYINT(1) NOT NULL',
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('{{%community_admin}');
    }
}
