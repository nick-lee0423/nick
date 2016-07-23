<?php
/**
 * Created by PhpStorm.
 * User: nick
 * Date: 16-7-5
 * Time: 下午11:08
 */
use \yii\helpers\Url;
use \app\models\ArticleStyle;
$this->title = $style_name['name'].'类别文章列表';
?>
<article>
    <h1 class="t_nav">
        <span>“慢生活”不是懒惰，放慢速度不是拖延时间，而是让我们在生活中寻找到平衡。</span>
        <a href="/" class="n1">网站首页</a>
        <a href="#" class="n2">慢生活</a>
    </h1>
    <div class="l_box f_l bg_image">
        <?php
            foreach ($article_news as $value):
        ?>
        <h2 class="bt_yangshi">
            <a title="" href="<?= Url::to(['article/view', 'id' => $value['id']])?>"><?=$value['article_name']?></a>
        </h2>
        <p class="dateview">
            <span>发布时间：<?=$value['article_created_date']?></span>
            <span>作者：
                <?php
//                    $author_news = \mdm\admin\models\User::findOne($value['article_author']);
                    echo $value['article_author'];
                ?>
            </span>
            <span>[<a href="#">
                    <?php
                        $style_news = ArticleStyle::findOne($value['article_style']);
                        echo $style_news['name'];
                    ?></a>]
            </span>
        </p>
        <figure>
            <a title="" href="<?= Url::to(['article/view', 'id' => $value['id']])?>">
             <img src="/images/01.jpg" alt="">
            </a>
        </figure>
        <div class="nlist">
            <p><?= $value['article_sketch'] ?></p>
            <a href="<?= Url::to(['article/view', 'id' => $value['id']])?>" title="" target="_self" class="readmore">阅读全文&gt;&gt;</a>
        </div>
        <div class="line"></div>
        <?php endforeach;?>
    </div>
    <div class="r_box f_r">
        <div class="cloud">
            <h3>热门标签</h3>
            <ul>
                <?php
                foreach ($target as $value):
                    ?>
                    <li><a href="<?= Url::to(['target/index', 'id' => $value['id']])?>"><?=$value['name'] ?></a></li>
                <?php endforeach;?>
            </ul>
        </div>
        <div class="moreSelect" id="lp_right_select">
            <div class="ms-top">
                <ul class="hd" id="tab">
                    <li class="cur"><a href="/">热门文章</a></li>
                </ul>
            </div>
            <div class="ms-main" id="ms-main">
                <div style="display: block;" class="bd bd-news" >
                    <ul>
                        <li><a href="/" target="_blank">住在手机里的朋友</a></li>
                        <li><a href="/" target="_blank">教你怎样用欠费手机拨打电话</a></li>
                        <li><a href="/" target="_blank">原来以为，一个人的勇敢是，删掉他的手机号码...</a></li>
                        <li><a href="/" target="_blank">手机的16个惊人小秘密，据说99.999%的人都不知</a></li>
                        <li><a href="/" target="_blank">你面对的是生活而不是手机</a></li>
                        <li><a href="/" target="_blank">豪雅手机正式发布! 在法国全手工打造的奢侈品</a></li>
                    </ul>
                </div>
            </div>
            <!--ms-main end -->
        </div>
        <!--切换卡 moreSelect end -->
    </div>
</article>
