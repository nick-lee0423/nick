<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\article\models\ArticleSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="article-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'article_id') ?>

    <?= $form->field($model, 'article_name') ?>

    <?= $form->field($model, 'article_img') ?>

    <?= $form->field($model, 'article_sketch') ?>

    <?= $form->field($model, 'article_content') ?>

    <?php // echo $form->field($model, 'article_style') ?>

    <?php // echo $form->field($model, 'article_author') ?>

    <?php // echo $form->field($model, 'article_created_date') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
