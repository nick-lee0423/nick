<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\article_style\models\ArticleStyleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '分类管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="article-style-index">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('新建分类', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            [
                'label' => '作者',
                'value' => function($dataProvider){
                    $user_news = \mdm\admin\models\User::findOne($dataProvider->creates_author);
                    return $user_news['username'];
                },
            ],
            'created_date',
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
