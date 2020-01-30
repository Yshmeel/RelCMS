<?php
    namespace app\modules\api\versions\v1\controllers;

    use app\modules\api\versions\v1\V1;
    use yii\web\Controller;

    class InstallationController extends Controller {
        public function actionCheckRequirements() {
            return V1::output([
                'text' => 'Hello world!'
            ]);
        }

        public function beforeAction($action)
        {
            return parent::beforeAction($action);
        }
    }