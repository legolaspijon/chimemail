<?php

use yii\db\Migration;

/**
 * Handles the creation of table `community`.
 */
class m180115_111042_create_community_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('{{%community}}', [
            'id' => $this->primaryKey(),
            'name' => \yii\db\Schema::TYPE_STRING . '(60) NOT NULL',
            'url' => \yii\db\Schema::TYPE_STRING . '(2083) NOT NULL',
            'facebook_url' => \yii\db\Schema::TYPE_STRING . '(2083)'
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('{{%community}}');
    }
}
