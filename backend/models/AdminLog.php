<?php
/**
 * Created by PhpStorm.
 * User: nick
 * Date: 16-6-16
 * Time: 下午10:27
 */
namespace backend\models;
use Yii;
use yii\helpers\Url;
class AdminLog
{
    public static function write($event)
    {
        // 显示详情有待优化,不过基本功能完整齐全
        if(!empty($event->changedAttributes)) {
            $desc = '';
            foreach($event->changedAttributes as $name => $value) {
                $desc .= $name . ' : ' . $value . '=>' . $event->sender->getAttribute($name) . ',';
            }
            $desc = substr($desc, 0, -1);
            $description = Yii::$app->user->identity->username . '修改了表' . $event->sender->tableSchema->name . ' id:' . $event->sender->id . '的' . $desc;
            $route = Url::to();
            $userId = Yii::$app->user->id;
            $ip = Yii::$app->request->userIP;
            $data = [
                'route' => $route,
                'description' => $description,
                'user_id' => $userId,
                'ip' => $ip
            ];
            $model = new \app\modules\admin_log\models\AdminLog();
            $model->created_at = time();
            $model->setAttributes($data);
            $model->save();

        }
    }
}