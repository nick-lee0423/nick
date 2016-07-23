<?php
/**
 * Created by PhpStorm.
 * User: nick
 * Date: 16-7-4
 * Time: 下午10:54
 */

namespace frontend\controllers;


use app\models\Article;
use app\models\ArticleStyle;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class TargetController extends Controller
{

    /**
     * 文章列表
     * @param $id
     * @return string
     * @throws NotFoundHttpException
     */
    public function actionIndex($id)
    {
        $target = ArticleStyle::find()->asArray()->all();
        $article_news = Article::find()->where(['article_style'=>$id])->asArray()->all();
        $style_name = ArticleStyle::findOne($id);
        return $this->render('index',[
            'article_news' => $article_news,
            'target' => $target,
            'style_name'=>$style_name,
        ]);
    }
}
