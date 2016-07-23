<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\article_style\models\ArticleStyle */

$this->title = '新建分类';
$this->params['breadcrumbs'][] = ['label' => '分类管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="article-style-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
