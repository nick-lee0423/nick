<?php
/**
 * Created by PhpStorm.
 * User: nick
 * Date: 16-7-4
 * Time: 下午10:46
 */
$this->title=$article_news['article_name'];
?>
<article>
    <div class="l_box f_l">
        <div class="topnews">
            <h2><?= $article_news['article_name'] ?></h2>
            <?= $article_news['article_content'] ?>
        </div>
    </div>
    <div class="r_box f_r">
        <div class="moreSelect" id="lp_right_select">
            <div class="ms-top">
                <ul class="hd" id="tab">
                    <li class="cur"><a href="/">点击排行</a></li>
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