<?php

namespace app\commands;

use app\modules\user\models\User;
use app\rbac\UserRoleRule;
use Yii;
use yii\console\Controller;

/**
 * Description of RbacController
 *
 * @author Stableflow
 */
class RbacController extends Controller
{
    public function actionInit()
    {
        $auth = Yii::$app->authManager;
        $rule = new UserRoleRule();
        $auth->add($rule);

        // Role User
        $user = $auth->createRole('temp_user');
        $user->ruleName = $rule->name;
        $auth->add($user);

        // Role User
        $user = $auth->createRole('user');
        $user->ruleName = $rule->name;
        $auth->add($user);

        // Role Admin
        $admin = $auth->createRole('admin');
        $admin->ruleName = $rule->name;
        $auth->add($admin);
        $auth->addChild($admin, $user);
    }
}
