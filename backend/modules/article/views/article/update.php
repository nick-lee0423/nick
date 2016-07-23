<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\article\models\Article */

$this->title = '更新文章: ' . $model->article_name;
$this->params['breadcrumbs'][] = ['label' => '文章管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->article_name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '更新';
?>
<div class="article-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
