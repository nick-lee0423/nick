<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin_log\models\AdminLogSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '操作日志';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admin-log-index">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'route',
             'ip',
            [
                'label' => '操作时间',
                'value' => function($dataProvider){
                    return date('Y-m-d H:i:s',$dataProvider->created_at);
                },
            ],
            [
                'label' => '操作人',
                'value' => function($dataProvider){
                    $user_news = \mdm\admin\models\User::findOne($dataProvider->user_id);
                    return $user_news['username'];
                },
            ],


            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
