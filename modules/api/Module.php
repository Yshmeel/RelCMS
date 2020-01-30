<?php
namespace app\modules\api;

/**
 * Installation module on RelCMS
 * @author Yshmeel <yshmeel.github.io>
 * @package app\modules\installation
 */
class Module extends \yii\base\Module {
    public function init()
    {
        parent::init();

        $this->modules = [
            'v1' => [
                'class' => 'app\modules\api\versions\v1\V1'
            ]
        ];

        $this->controllerNamespace = 'app\modules\api\controllers';
    }
}