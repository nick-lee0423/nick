<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\article\models\ArticleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '文章管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="article-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('新建文章', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'article_name',
            [
                'label' => '图标',
                'format'=>'raw',
                'value'=>function($dataProvider){
                    return Html::img("{$dataProvider['article_img']}",
                        ['class' => 'img-circle','width' => '40px']
                    );
                }
            ],
            'article_sketch',
            [
                'label' => '类型',
                'value' => function($dataProvider){
                    $manager_news = \app\modules\article_style\models\ArticleStyle::findOne($dataProvider->article_style);
                    return $manager_news->name;
                },
            ],
            [
                'label' => '作者',
                'value' => function($dataProvider){
                    $user_news = \mdm\admin\models\User::findOne($dataProvider->article_author);
                    return $user_news['username'];
                },
            ],
            'article_created_date',
            [
                'label' => '状态',
                'value' => function($dataProvider){
                    if($dataProvider->status == 1){
                        return '有效';
                    }else{
                        return '无效';
                    }

                },
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
