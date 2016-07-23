<?php
use \yii\helpers\Url;
$this->title = '杂记·碎记';
?>
<article>
    <div class="l_box f_l">
        <div class="banner">
            <div id="slide-holder">
                <div id="slide-runner">
                    <a href="/" target="_blank">
                        <img id="slide-img-1" src="images/a1.jpg" alt="" />
                    </a>
                    <a href="/" target="_blank">
                        <img id="slide-img-2" src="images/a2.jpg" alt="" /></a>
                    <a href="/" target="_blank">
                        <img id="slide-img-3" src="images/a3.jpg" alt="" /></a>
                    <a href="/" target="_blank">
                        <img id="slide-img-4" src="images/a4.jpg" alt="" /></a>
                    <div id="slide-controls">
                        <p id="slide-client" class="text"><strong></strong><span></span></p>
                        <p id="slide-desc" class="text"></p>
                        <p id="slide-nav"></p>
                    </div>
                </div>
            </div>
            <script>
                if(!window.slider) {
                    var slider={};
                }

                slider.data= [
                    {
                        "id":"slide-img-1", // 与slide-runner中的img标签id对应
                        "client":"标题1",
                        "desc":"这里修改描述 这里修改描述 这里修改描述" //这里修改描述
                    },
                    {
                        "id":"slide-img-2",
                        "client":"标题2",
                        "desc":"add your description here"
                    },
                    {
                        "id":"slide-img-3",
                        "client":"标题3",
                        "desc":"add your description here"
                    },
                    {
                        "id":"slide-img-4",
                        "client":"标题4",
                        "desc":"add your description here"
                    }
                ];

            </script>
        </div>
        <!-- banner代码 结束 -->
        <div class="topnews">
            <h2><span><a href="/" target="_blank">栏目标题</a><a href="/" target="_blank">栏目标题</a><a href="/" target="_blank">栏目标题</a></span><b>文章</b>推荐</h2>
            <?php foreach ($data as $key=>$value):?>
            <div class="blogs">
                <figure><img src="images/0<?= $key+1 ?>.jpg"></figure>
                <ul>
                    <h3><a href="<?= Url::to(['article/view', 'id' => $value['id']])?>"><?= $value['article_name'] ?></a></h3>
                    <p><?= $value['article_sketch'] ?></p>
                    <p class="autor">
                        <span class="lm f_l">
                            <a href="<?= Url::to(['target/index', 'id' => $value['article_style']])?>">
                                <?php
                                    $style = \app\models\ArticleStyle::findOne($value['article_style']);
                                    echo $style['name'];
                                ?>
                            </a>
                        </span>
                        <span class="dtime f_l"><?= date('Y-m-d H:i',strtotime($value['article_created_date']))?></span>
                        <span class="viewnum f_r">浏览（<a href="/">459</a>）</span>
                        <span class="pingl f_r">评论（<a href="/">30</a>）</span>
                    </p>
                </ul>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="r_box f_r">
        <div class="tit01">
            <h3>关注我</h3>
            <div class="gzwm">
                <ul>
                    <li><a class="xlwb" href="#" target="_blank">新浪微博</a></li>
                    <li><a class="txwb" href="#" target="_blank">腾讯微博</a></li>
                    <li><a class="rss" href="portal.php?mod=rss" target="_blank">RSS</a></li>
                    <li><a class="wx" href="mailto:nicks_lee@163.com">邮箱</a></li>
                </ul>
            </div>
        </div>
        <!--tit01 end-->
        <div class="ad300x100"> <img src="images/ad300x100.jpg"> </div>
        <div class="moreSelect" id="lp_right_select">
            <script>
                window.onload = function ()
                {
                    var oLi = document.getElementById("tab").getElementsByTagName("li");
                    var oUl = document.getElementById("ms-main").getElementsByTagName("div");

                    for(var i = 0; i < oLi.length; i++)
                    {
                        oLi[i].index = i;
                        oLi[i].onmouseover = function ()
                        {
                            for(var n = 0; n < oLi.length; n++) oLi[n].className="";
                            this.className = "cur";
                            for(var n = 0; n < oUl.length; n++) oUl[n].style.display = "none";
                            oUl[this.index].style.display = "block"
                        }
                    }
                }
            </script>
            <div class="ms-top">
                <ul class="hd" id="tab">
                    <li class="cur"><a href="/">点击排行</a></li>
                    <li><a href="/">最新文章</a></li>
                    <li><a href="/">站长推荐</a></li>
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
                <div  class="bd bd-news">
                    <ul>
                        <?php foreach ($data as $key=>$value):?>
                        <li><a href="<?= Url::to(['article/view', 'id' => $value['id']])?>" target="_self"><?= $value['article_name'] ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="bd bd-news">
                    <ul>
                        <li><a href="/" target="_blank">手机的16个惊人小秘密，据说99.999%的人都不知</a></li>
                        <li><a href="/" target="_blank">你面对的是生活而不是手机</a></li>
                        <li><a href="/" target="_blank">住在手机里的朋友</a></li>
                        <li><a href="/" target="_blank">豪雅手机正式发布! 在法国全手工打造的奢侈品</a></li>
                        <li><a href="/" target="_blank">教你怎样用欠费手机拨打电话</a></li>
                        <li><a href="/" target="_blank">原来以为，一个人的勇敢是，删掉他的手机号码...</a></li>
                    </ul>
                </div>
            </div>
            <!--ms-main end -->
        </div>
        <!--切换卡 moreSelect end -->

        <div class="cloud">
            <h3>标签云</h3>
            <ul>
                <?php
                    foreach ($target as $value):
                ?>
                <li><a href="<?= Url::to(['target/index', 'id' => $value['id']])?>"><?=$value['name'] ?></a></li>
                <?php endforeach;?>
            </ul>
        </div>
        <div class="tuwen">
            <h3>图文推荐</h3>
            <ul>
                <li><a href="/"><img src="images/01.jpg"><b>住在手机里的朋友</b></a>
                    <p><span class="tulanmu"><a href="/">手机配件</a></span><span class="tutime">2015-02-15</span></p>
                </li>
                <li><a href="/"><img src="images/02.jpg"><b>教你怎样用欠费手机拨打电话</b></a>
                    <p><span class="tulanmu"><a href="/">手机配件</a></span><span class="tutime">2015-02-15</span></p>
                </li>
                <li><a href="/" title="手机的16个惊人小秘密，据说99.999%的人都不知"><img src="images/03.jpg"><b>手机的16个惊人小秘密，据说...</b></a>
                    <p><span class="tulanmu"><a href="/">手机配件</a></span><span class="tutime">2015-02-15</span></p>
                </li>
                <li><a href="/"><img src="images/06.jpg"><b>住在手机里的朋友</b></a>
                    <p><span class="tulanmu"><a href="/">手机配件</a></span><span class="tutime">2015-02-15</span></p>
                </li>
                <li><a href="/"><img src="images/04.jpg"><b>教你怎样用欠费手机拨打电话</b></a>
                    <p><span class="tulanmu"><a href="/">手机配件</a></span><span class="tutime">2015-02-15</span></p>
                </li>
            </ul>
        </div>
        <div class="links">
            <h3><span>[<a href="/">申请友情链接</a>]</span>友情链接</h3>
            <ul>
                <li><a href="/">杨青个人博客</a></li>
                <li><a href="/">web开发</a></li>
                <li><a href="/">前端设计</a></li>
                <li><a href="/">Html</a></li>
                <li><a href="/">CSS3</a></li>
                <li><a href="/">Html5+css3</a></li>
                <li><a href="/">百度</a></li>
            </ul>
        </div>
    </div>
    <!--r_box end -->
</article>