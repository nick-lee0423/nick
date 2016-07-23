<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <header>
        <div class="logo f_l"> <a href="/"><img src="/images/logo.png">杂记·碎记</a> </div>
        <nav id="topnav" class="f_r">
            <ul>
                <a href="/" target="_self">首页</a> <a href="news.html" target="_blank">工作碎记</a> <a href="p.html" target="_blank">碎言碎语</a> <a href="c.html" target="_blank">美文摘录</a> <a href="b.html" target="_blank">留言版</a>
            </ul>
            <script src="js/nav.js"></script>
        </nav>
    </header>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; 杂记·碎记 <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
    <div id="tbox">
        <a id="togbook" href="/"></a>
        <a id="gotop" style="display: none" href="javascript:void(0)"></a>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
