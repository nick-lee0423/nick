<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\article\models\Article */

$this->title = $model->article_name;
$this->params['breadcrumbs'][] = ['label' => '文章管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="article-view">
    
    <p>
        <?= Html::a('更新', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '您确定要删除此数据吗?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'article_name',
            [
                'label' => '封面图片',
                'format' => 'raw',
                'value' => Html::img($model->article_img),
            ],
            'article_sketch',
            [
                'attribute' => 'content',
                'label' => '文章内容',
                'value' => \yii\helpers\Markdown::process($model->article_content),
                'format' => 'raw',
            ],
            [
                'attribute' => 'content',
                'label' => '文章分类',
                'value' => $article_style['name'],
                'format' => 'raw',
            ],
            [
                'attribute' => 'content',
                'label' => '文章作者',
                'value' => $author['username'],
                'format' => 'raw',
            ],
            'article_created_date',
            [
                'attribute' => 'content',
                'label' => '文章状态',
                'value' => $status,
                'format' => 'raw',
            ],
        ],
    ]) ?>

</div>
