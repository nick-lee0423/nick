<?php
/**
 * Created by PhpStorm.
 * User: nick
 * Date: 16-6-15
 * Time: 下午6:46
 */
namespace backend\controllers;

use Yii;
use yii\web\Controller;

class UeditorController extends Controller
{
    public function actions(){
        return [
            'ueditor'=>[
                'class' => 'common\widgets\ueditor\UeditorAction',
                'config'=>[
                    //上传图片配置
                    'imageUrlPrefix' => "", /* 图片访问路径前缀 */
                    'imagePathFormat' => "/image/{yyyy}{mm}{dd}/{time}{rand:6}", /* 上传保存路径,可以自定义保存路径和文件名格式 */
                ]
            ]
        ];
    }
}
?>