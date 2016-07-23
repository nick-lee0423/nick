<?php
/**
 * Created by PhpStorm.
 * User: nick
 * Date: 16-7-4
 * Time: 下午10:54
 */

namespace frontend\controllers;


use app\models\Article;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class ArticleController extends Controller
{
    /**
     * 分类文章列表
     */
//    public function actionIndex($cate)
//    {
//        $category = Category::find()->andWhere(['name' => $cate])->one();
//        if (empty($category)) {
//            throw new NotFoundHttpException('分类不存在');
//        }
//        $query = Article::find()->published()->andFilterWhere(['category_id' => $category->id]);
//        $dataProvider = new ActiveDataProvider([
//            'query' => $query,
//            'sort' => [
//                'defaultOrder' => [
//                    'published_at' => SORT_DESC
//                ]
//            ]
//        ]);
//        $pages = $dataProvider->getPagination();
//        $models = $dataProvider->getModels();
//        // 热门标签
//        $hotTags = Tag::hot();
//        return $this->render('index', [
//            'models' => $models,
//            'pages' => $pages,
//            'category' => $category,
//            'hotTags' => $hotTags
//        ]);
//    }

    /**
     * 标签文章列表
     */
//    public function actionTag($name)
//    {
//        $tag = Tag::find()->where(['name' => $name])->one();
//        if (empty($tag)) {
//            throw new NotFoundHttpException('标签不存在');
//        }
//        $query = $tag->getArticles();
//        $dataProvider = new ActiveDataProvider([
//            'query' => $query,
//            'sort' => [
//                'defaultOrder' => [
//                    'published_at' => SORT_DESC
//                ]
//            ]
//        ]);
//        $pages = $dataProvider->getPagination();
//        $models = $dataProvider->getModels();
//        // 热门标签
//        $hotTags = Tag::find()->orderBy('article desc')->all();
//        return $this->render('index', [
//            'models' => $models,
//            'pages' => $pages,
//            'tag' => $tag,
//            'hotTags' => $hotTags
//        ]);
//    }
    /**
     * 文章详情
     * @param $id
     * @return string
     * @throws NotFoundHttpException
     */
    public function actionView($id)
    {
        /* @var $model Article|null */
        $article_news = Article::find()->where(['id' => $id])->asArray()->one();
        if ($article_news === null) {
            throw new NotFoundHttpException('not found');
        }
        
        return $this->render('view',[
            'article_news'=>$article_news,
        ]);
    }
}
