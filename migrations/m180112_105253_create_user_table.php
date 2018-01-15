<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation of table `user`.
 */
class m180112_105253_create_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%users}}', [
            'id' => 'pk',
            'firstName' => Schema::TYPE_STRING . '(60) NOT NULL',
            'lastName' => Schema::TYPE_STRING . '(60) NOT NULL',
            'email' => Schema::TYPE_STRING . '(100) NOT NULL',
            'role' => 'TINYINT(1) NOT NULL',
            'password' => Schema::TYPE_STRING . '(64)',
            'status' => 'TINYINT(1) NOT NULL',
            'auth_key' => $this->string(32)->notNull(),
            'create_date' => 'DATETIME NOT NULL'
        ], $tableOptions);

        $this->createIndex('email_unique', '{{%users}}', ['email'], true);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('{{%users}}');
    }
}
