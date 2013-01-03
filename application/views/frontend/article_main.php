<div id="web">
    <div class="right">
        <h3 class="title"><span><?php echo $article['name'] ? $article['name'] : $article['title'] ?></span></h3>
        <div class="webcontent">
            <h1 class="title"><?php echo $article['title'] ?></h1>
            <?php if($article['img']): ?>
            <div class="text" style="text-align: center; margin: 15px 0px;"><img src="<?php echo base_url() ?>uploads/<?php echo $article['img'] ?>" /></div>
            <?php endif; ?>
            <div class="text"><?php echo $article['content'] ?></div>
            
            <div class="page">
                <?php if($pre_news): ?>
                上一条：<a href="<?php echo site_url('article/'.$pre_news['id'].'.html') ?>" title="<?php echo $pre_news['title'] ?>"><?php echo $pre_news['title'] ?></a><br>
                <?php endif; ?>
                <?php if($next_news): ?>
                下一条：<a href="<?php echo site_url('article/'.$next_news['id'].'.html') ?>" title="<?php echo $next_news['title'] ?>"><?php echo $next_news['title'] ?></a>
                <?php endif; ?>
            </div>
            <div class="hits">
                点击次数：<?php echo $article['view_count'] ?>&nbsp;&nbsp;更新时间：<?php echo $article['updated_at'] ?>&nbsp;&nbsp;【<a href="javascript:window.print()">打印此页</a>】&nbsp;&nbsp;【<a href="javascript:self.close()">关闭</a>】
            </div>

        </div>
    </div>

    <div class="left">
        <?php if(!empty($non_menu)): ?>
        <h3 class="title"><span>资讯</span></h3>
        <div class="webnav">
            <ul>
                <?php foreach($non_menu as $v): ?>
                <li class="li_class2"><a title="<?php echo $v['name'] ?>" href="<?php echo site_url('category/'.$v['id'].'.html');?>"><?php echo $v['name'] ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <?php endif; ?>
        <h3 class="title"><span>联系方式</span></h3>
        <div class="text">
            <div>联系人：洪雁</div>
            <div>电 &nbsp;话：（86）0510-85329237</div>
            <div>邮 &nbsp;编：214122</div>
            <div>Email：yan_er74hong@yahoo.com.cn</div>
            <div>地 &nbsp;址：江苏省无锡市蠡湖大道1800#江南大学食品学院</div>
        </div>
    </div>

    <div style="clear:both;"></div>
</div>