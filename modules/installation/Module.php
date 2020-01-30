<?php
    namespace app\modules\installation;

    use app\modules\installation\helpers\Installation;

    /**
     * Installation module on RelCMS
     * @author Yshmeel <yshmeel.github.io>
     * @package app\modules\installation
     */
    class Module extends \yii\base\Module {
        public function init()
        {
            parent::init();

            if(!Installation::isCMSInstalled()) {
                return header("Location: /installation/default/index");
            }

            $this->controllerNamespace = 'app\modules\installation\controllers';
        }
    }