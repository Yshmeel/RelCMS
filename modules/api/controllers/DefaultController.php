<?php

namespace app\modules\api\controllers;

use yii\web\Controller;
use app\modules\installation\helpers\Installation;

class DefaultController extends Controller {
    public function actionIndex() {
        return 'Hello world';
    }
}