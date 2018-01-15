<?php

use yii\db\Migration;

/**
 * Class m180112_111922_init_base_users
 */
class m180112_111922_init_base_users extends Migration
{
    protected $table = '{{%users}}';

    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $security = Yii::$app->security;

        $this->insert($this->table, [
            'firstName' => 'admin',
            'lastName' => 'admin',
            'email' => 'admin@gmail.com',
            'role' => \app\modules\user\models\User::ROLE_ADMIN,
            'password' => $security->generatePasswordHash('admin'),
            'create_date' => gmdate("Y-m-d H:i:s", time()),
            'status' => \app\modules\user\models\User::STATUS_ACTIVE,
            'auth_key' => Yii::$app->security->generateRandomString()
        ]);

        $this->insert($this->table, [
            'firstName' => 'user',
            'lastName' => 'user',
            'email' => 'sf_user@gmail.com',
            'role' => \app\modules\user\models\User::ROLE_USER,
            'password' => $security->generatePasswordHash('123123'),
            'create_date' => gmdate("Y-m-d H:i:s", time()),
            'status' => \app\modules\user\models\User::STATUS_ACTIVE,
            'auth_key' => Yii::$app->security->generateRandomString()
        ]);

        $this->insert($this->table, [
            'firstName' => 'temp',
            'lastName' => 'temp',
            'email' => 'temp@gmail.com',
            'role' => \app\modules\user\models\User::ROLE_TEMP,
            'create_date' => gmdate("Y-m-d H:i:s", time()),
            'status' => \app\modules\user\models\User::STATUS_ACTIVE,
            'auth_key' => Yii::$app->security->generateRandomString()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->delete($this->table, ['in', 'email', ['sf_user@gmail.com', 'admin@gmail.com', 'temp@gmail.com']]);
    }
}
