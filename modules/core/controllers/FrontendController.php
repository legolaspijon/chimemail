<?php

namespace app\modules\core\controllers;

/**
 * Base class for frontend controllers
 * Class FrontendController
 * @package app\modules\core\controllers
 */
abstract class FrontendController extends \yii\web\Controller
{
    public $layout = '@app/views/layouts/frontend/main';

}