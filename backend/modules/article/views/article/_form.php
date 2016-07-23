<?php

use Yii;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\modules\article_style\models\ArticleStyle;

/* @var $this yii\web\View */
/* @var $model app\modules\article\models\Article */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="article-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'article_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'article_img')->widget('common\widgets\file_upload\FileUpload',[
        'config'=>[
            //图片上传的一些配置，不写调用默认配置
        ]
    ]) ?>
    
    <?= $form->field($model, 'article_sketch')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'article_content')->widget('common\widgets\ueditor\Ueditor',[
        'options'=>[
            'initialFrameWidth' => '100%',
            'initialFrameHeight' => 500,
        ]
    ]) ?>

    <?= $form->field($model, 'article_style')->dropDownList(ArrayHelper::map(ArticleStyle::find()->all(),'id', 'name'));?>

    <?= $form->field($model, 'status')->dropDownList(['1' => '有效', '0' => '无效']); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '新建' : '更新', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
