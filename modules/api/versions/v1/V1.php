<?php
namespace app\modules\api\versions\v1;

use yii\helpers\Json;

/**
 * API v1
 * @version 1.0
 * @author Yshmeel <yshmeel.github.io>
 * @package app\modules\api\versions\v1
 */
class V1 extends \yii\base\Module {
    public function init()
    {
        parent::init();

        \Yii::$app->errorHandler->errorAction = '/api/v1/error';
    }

    public static function output($json = []) {
        return Json::encode($json);
    }
}