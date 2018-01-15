<?php

namespace app\modules\dashboard\controllers;

use app\modules\core\controllers\BackendController;

class IndexBackendController extends BackendController
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}