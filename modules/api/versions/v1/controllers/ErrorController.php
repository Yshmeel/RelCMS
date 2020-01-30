<?php

namespace app\modules\api\versions\v1\controllers;

use app\modules\api\versions\v1\V1;
use yii\web\Controller;
use app\modules\installation\helpers\Installation;

class ErrorController extends Controller {
    public function actionIndex() {
        return V1::output([
            'error_code' => '404'
        ]);
    }
}