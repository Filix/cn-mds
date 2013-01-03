<div id="head">
    <div class="logo">

    </div>
    <div class="sidebar">
        <div class="lang">
            <span class="time">今天是 <?php echo date('Y-m-d'); ?></span>
            <!--<a href="#" onclick="SetHome(this,window.location);" style="cursor:pointer;" title="设为首页">设为首页</a><span>|</span>-->
            <a href="#" onclick="addFavorite();" style="cursor:pointer;" title="收藏本站">收藏本站</a>
        </div>
        <h1><p></p></h1>
        <div class="login"></div>
    </div>
    <div style="clear:both;"></div>
    <div class="nav">
        <ul>
            <li class="class1">
                <a href="<?php echo base_url();?>" title="网站首页" class="class1<?php echo $focus == 'homepage' ? ' navdown' : '';?>">
                    <span>网站首页</span>
                </a>
            </li>
            <li class="line"></li>
            <?php foreach($menu as $v): ?>
            <li class="class1">
                <a href="<?php echo site_url('category/'.$v['id'].'.html');?>"  title="<?php echo $v['name']?>" class="class1<?php echo $focus == 'category_'.$v['id'] ? ' navdown' : '';?>">
                    <span><?php echo $v['name']?></span>
                </a>
            </li>
            <li class="line"></li>
            <?php endforeach; ?>
            <li class="class1">
                <a href="list.html" title="联系我们" class="class1<?php echo $focus == 'homepage' ? ' contactus' : '';?>">
                    <span>联系我们</span>
                </a>
            </li>
        </ul>
        <div>
            <form method="POST" name="myform1" action="../search/search.php?lang=cn" target="_self">
                <input name="searchword" size="20" class="navtext" type="text">
                <input name="Submit" value="&nbsp;&nbsp;" class="navsb" type="submit">
            </form>
        </div>
    </div>
    <?php if(isset($slide)): ?>
        <?php if(count($slide)): ?>
        <div id="flash">
            <div class="topbg"></div>
            <div class="content">
                <div class="flash">
                    <?php $text = array(); $link = array(); $image = array(); ?>
                    <?php foreach($slide as $v): ?>
                        <?php $text[] = $v['title'] ? $v['title'] : '' ?>
                        <?php $link[] = $v['redirect_url'] ? $v['redirect_url'] : '' ?>
                        <?php $image[] = $v['img'] ? base_url() . 'uploads/' . $v['img'] : '' ?>
                    <?php endforeach; ?>
                    <script type="text/javascript">
                        var swf_width=990;
                        var swf_height=245;
                        var files='<?php echo implode($image, '|') ?>';
                        var links='<?php echo implode($link, '|') ?>';
                        var texts='<?php echo implode($text, '|') ?>';
                        var swfpath = '<?php echo base_url();?>/public/swf/flash.swf';
                        var AutoPlayTime=6; //间隔时间：单位是秒
                        document.write('<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="'+ swf_width +'" height="'+ swf_height +'">');
                        document.write('<param name="movie" value='+swfpath+'><param name="quality" value="high">');
                        document.write('<param name="menu" value="false"><param name=wmode value="opaque">');
                        document.write('<param name="FlashVars" value="bcastr_file='+files+'&bcastr_link='+links+'&bcastr_title='+texts+'&AutoPlayTime='+AutoPlayTime+'">');
                        document.write('<embed src='+swfpath+' wmode="opaque" FlashVars="bcastr_file='+files+'&bcastr_link='+links+'&bcastr_title='+texts+'&AutoPlayTime='+AutoPlayTime+'" menu="false" quality="high" width="'+ swf_width +'" height="'+ swf_height +'" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />');
                        document.write('</object>');
                    </script>
                </div>
            </div>
            <div class="bottombg"></div>
        </div>
        <?php endif; ?>
    <?php else: ?>
    <div id="flash">
        <div class="topbg"></div>
        <div class="content">
            <div class="flash">
                <a href="" target="_blank" title=""><img src="<?php echo base_url();?>/public/images/1342430358.jpg" alt="MetInfo企业网站管理系统" height="90" width="980"></a>
            </div>
        </div>
        <div class="bottombg"></div>
    </div>
    <?php endif; ?>
</div>