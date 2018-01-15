<?php

namespace app\modules\core\controllers;

/**
 * Base class for backend controllers
 * Class BackendController
 * @package app\modules\core\controllers
 */
abstract class BackendController extends \yii\web\Controller
{
    public $layout = '@app/views/layouts/backend/main';
}