<?php
/**
 * Created by PhpStorm.
 * User: nick_lee
 * Date: 16/6/16
 * Time: 下午5:22
 */
namespace app\modules\database;

/**
 * article module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'app\modules\database\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        \Yii::configure($this, require(__DIR__ . '/config/main.php'));
    }
}