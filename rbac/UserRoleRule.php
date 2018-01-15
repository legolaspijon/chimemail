<?php

namespace app\rbac;

use Yii;
use yii\rbac\Rule;
use app\modules\user\models\User;

class UserRoleRule extends Rule
{
    public $name = 'userGroup';

    public function execute($user, $item, $params) {

        if (!\Yii::$app->user->isGuest) {
            $role = \Yii::$app->user->identity->role;
            switch ($item->name) {
                case 'admin':
                    return $role == User::ROLE_ADMIN;
                    break;
                case 'temp_user':
                    return $role == User::ROLE_TEMP || $role == User::ROLE_TEMP || $role == User::ROLE_ADMIN;
                    break;
                case 'user':
                    return $role == User::ROLE_USER || $role == User::ROLE_ADMIN;
                    break;
            }
        }

        return false;
    }
}