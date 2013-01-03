<div id="web" xmlns="http://www.w3.org/1999/html">
    <div class="right">
        <h3 class="title"><span><?php echo $category['name'] ?></span></h3>
        <div class="webcontent">
            <?php echo $list; ?>
        </div>
        <div class="web_bottom">
            <style>.digg4  { padding:3px; margin:3px; text-align:center; font-family:Tahoma, Arial, Helvetica, Sans-serif;  font-size: 12px;}.digg4  a { border:1px solid #ddd; padding:2px 5px 2px 5px; margin:2px; color:#aaa; text-decoration:none;}.digg4  a:hover { border:1px solid #a0a0a0; }.digg4  a:hover { border:1px solid #a0a0a0; }.digg4  span.current {border:1px solid #e0e0e0; padding:2px 5px 2px 5px; margin:2px; color:#aaa; background-color:#f0f0f0; text-decoration:none;}.digg4  span.disabled { border:1px solid #f3f3f3; padding:2px 5px 2px 5px; margin:2px; color:#ccc;} </style>
            <div class="digg4">
                <?php if($pageinfo['page']>1): ?>
                    <a href="<?php echo site_url('category/'.$category['id'].'.html');?>">«</a>
                    <a href="<?php echo site_url('category/'.$category['id'].'-'.($pageinfo['page']-1).'.html');?>">‹</a>
                <?php else: ?>
                    <span style="font-family: Tahoma, Verdana;" class="disabled"><b>«</b></span>
                    <span style="font-family: Tahoma, Verdana;" class="disabled">‹</span>
                <?php endif; ?>
                <span class="current"><?php echo $pageinfo['page'] ?></span>
                <?php if($pageinfo['page'] < $pageinfo['totalpages']): ?>
                    <a href="<?php echo site_url('category/'.$category['id'].'-'.($pageinfo['page']+1).'.html');?>">›</a>
                    <a href="<?php echo site_url('category/'.$category['id'].'-'.$pageinfo['totalpages'].'.html');?>">»</a>
                <?php else: ?>
                    <span style="font-family: Tahoma, Verdana;" class="disabled"><b>›</b></span>
                    <span style="font-family: Tahoma, Verdana;" class="disabled">»</span>
                <?php endif; ?>
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
            <div>电 &nbsp;话：(86)0510-85329237</div>
            <div>邮 &nbsp;编：214122</div>
            <div>Email：yan_er74hong@yahoo.com.cn</div>
            <div>地 &nbsp;址：江苏省无锡市蠡湖大道1800#江南大学食品学院</div>
        </div>
    </div>
    <div style="clear:both;"></div>
</div>