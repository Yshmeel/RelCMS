<?php

    namespace app\modules\installation\controllers;

    use yii\web\Controller;
    use app\modules\installation\helpers\Installation;

    class DefaultController extends Controller {
        public function actionIndex() {
            if(Installation::isCMSInstalled()) {
                return $this->redirect('/');
            }

            return $this->render("installation", [
                'step' => "welcome"
            ]);
        }

        public function actionStep1() {
            if(Installation::isCMSInstalled()) {
                return $this->redirect('/');
            }

            return $this->render("installation", [
                'step' => 1
            ]);
        }
    }