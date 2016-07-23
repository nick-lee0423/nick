<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\page\models\Page */

$this->title = '新建单页';
$this->params['breadcrumbs'][] = ['label' => '单页管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
