<?php

namespace app\modules\api\versions\v1\controllers;

use yii\web\Controller;
use app\modules\installation\helpers\Installation;

class DefaultController extends Controller {
    public function actionIndex() {
        return $this->redirect('/api');
    }
}