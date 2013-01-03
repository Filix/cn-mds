<div id="main">
<div class="left">
    <div class="topbg"><div></div></div>
    <div class="content">
        <div class="bg">
            <h3 class="title"><span>协会简介</span></h3>
            <div class="cont">
                <div style="text-indent: 2em">
                    <b>中国淀粉工业协会</b>是由国家民政部审批的一级协会。其归口管理单位为国家经济贸易委员会。涉及到造纸、纺织、食品、生物化工、饲料、铸造、精细化工、医药卫生、涂料、建材、皮革等领域。下属有变性淀粉、淀粉糖、淀粉生产机械、玉米淀粉、薯类淀粉五个专业委员会
                </div>
                <div style="height: 5px;"></div>
                <div style="text-indent: 2em">
                    <b>变性淀粉专业委员会</b>隶属于中国淀粉工业协会，是国家二级协会。是由从事变性淀粉科研、生产、应用和管理的单位组成的社会团体。主要从事变性淀粉行业规划和管理、信息交流、技术培训、国际合作、咨询服务。 变性淀粉专业委员会成立于1993年10月，挂靠在江南大学（原无锡轻工大学）。担负着制定国内变性淀粉行业发展规划、协调组织我国变性淀粉工业发展、为政府和企业提供变性淀粉咨询的职责。
                </div>
            </div>
            <div class="foot"><span></span></div>
        </div>
    </div>
    <div class="bottombg"><div></div></div>

</div>
<div class="center">
    <h3 class="title first"><a target="_blank" href="<?php echo site_url('category/1.html') ?>" ><span>热点新闻</span></a></h3>
<div class="text">
    <ul class="hot_news">
        <?php foreach($hot as $news): ?>
        <li>
            <span><?php echo date('Y-m-d H:i', strtotime($news['created_at'])); ?></span>
            <a target="_blank" title="<?php echo $news['title'] ?>" href="<?php echo site_url('article/'.$news['id'].'.html'); ?>"><?php echo $news['title'] ?></a>
        </li>
        <?php endforeach; ?>
    </ul>
</div>
<div style="clear:both;"></div>
<h3 class="title line"><a target="_blank" href="<?php echo site_url('category/3.html') ?>" ><span>厂家专栏</span></a></h3>
<div class="advice">
    <table cellspacing="0" cellpadding="0" width="540" align="center" border="0">
        <tbody>
        <tr>
            <td>
                <div id="demo" style="OVERFLOW: hidden; WIDTH: 540px; COLOR: #ffffff">
                    <table cellspacing="0" cellpadding="0" align="left" border="0" cellspace="0">
                        <tbody>
                        <tr>
                            <td id="demo1" valign="top"><table width="540" border="0" cellpadding="0" cellspacing="0">
                                <tbody><tr>
                                    <?php foreach($company as $c): ?>
                                    <td>
                                        <div class="indeximg">
                                            <a href="<?php echo site_url('article/'.$c['id'].'.html') ?>" target="_blank" title="<?php echo $c['title'] ?>">
                                                <img src="<?php echo base_url();?>uploads/<?php echo $c['img'] ?>" alt="<?php echo $c['title'] ?>" title="<?php echo $c['title'] ?>" width="120" height="120">
                                            </a>
                                            <h2><a href="<?php echo site_url('article/'.$c['id'].'.html') ?>" target="_blank" title="<?php echo $c['title'] ?>"><?php echo $c['title'] ?></a></h2>
                                        </div>
                                    </td>
                                    <?php endforeach; ?>
                                </tr>
                                </tbody></table></td>
                            <td id="demo2" valign="top"></td></tr></tbody></table></div>
            </td></tr></tbody></table>
    <script>
        var speed3=25//速度数值越大速度越慢
        var t=false;
        document.getElementById("demo2").innerHTML=document.getElementById("demo1").innerHTML
        function Marquee(){
            if(document.getElementById("demo2").offsetWidth-document.getElementById("demo").scrollLeft<=0)
                document.getElementById("demo").scrollLeft-=document.getElementById("demo1").offsetWidth
            else{
                document.getElementById("demo").scrollLeft++;
            }
            t=false;
        }
        function RMarquee(){
            if(document.getElementById("demo").scrollLeft<=0)
                document.getElementById("demo").scrollLeft+=document.getElementById("demo2").offsetWidth
            else{
                document.getElementById("demo").scrollLeft--
            }
            t=true;

        }
        function clickdiv(){
            clearInterval(MyMar)
            Marquee();
        }
        function Rclickdiv(){
            clearInterval(MyMar)
            RMarquee();
        }
        var MyMar=setInterval(Marquee,speed3)
        document.getElementById("demo").onmouseover=function() {clearInterval(MyMar)}
        document.getElementById("demo").onmouseout=function() {if(t){MyMar=setInterval(RMarquee,speed3)}else{MyMar=setInterval(Marquee,speed3)}}
    </script>
</div>
<?php if(count($links)): ?>
<h3 class="title line"><span>友情链接</span></h3>
<div class="links_list">
    <ul>
        <?php foreach($links as $link): ?>
            <li><a href="<?php echo $link['redirect_url'] ?>" target="_blank" title="<?php echo $link['title'] ?>"><?php echo $link['title'] ?></a></li>
        <?php endforeach; ?>
    </ul>
</div>
<?php endif ?>

</div>
<div class="right">
    <div class="topbg"><div></div></div>
    <div class="content">
        <div class="bg">
            <h3 class="title"><a target="_blank" href="<?php echo site_url('category/6.html') ?>"><span>网站通知</span></a></h3>
            <ul class="list">
                <?php foreach($notice as $n): ?>
                <li>
                    <span></span>
                    <a href="<?php echo site_url('article/'.$n['id'].'.html') ?>" target="_blank" title="<?php echo $n['title'] ?>"><?php echo mb_substr($n['title'],0, 16) ?></a>
                </li>
                <?php endforeach; ?>
                <li class="more"><a target="_blank" href="<?php echo site_url('category/6.html') ?>" title="更多">更多…</a></li>
            </ul>
            <h3 class="title line"><a target="_blank" href="<?php echo site_url('category/7.html') ?>"><span>最新会议</span></a></h3>
            <ul class="list">
                <?php foreach($meeting as $m): ?>
                <li>
                    <span></span>
                    <a target="_blank" title="<?php echo $m['title'] ?>" href="<?php echo site_url('article/'.$m['id'].'.html') ?>" ><?php echo mb_substr($m['title'],0, 16) ?></a>
                </li>
                <?php endforeach; ?>
                <li class="more"><a target="_blank" href="<?php echo site_url('category/7.html') ?>" title="更多">更多…</a></li>
            </ul>
            <script type="text/javascript">
                $(function(){
                    var dlwidth = $('#main div.case dl');
                    var ddwidth = $('#main div.case dd');
                    var widthmx = dlwidth.width() - 75 - 5;
                    ddwidth.width(widthmx);
                });
            </script>
        </div>
    </div>
    <div class="bottombg"><div></div></div>
</div>
<div style="clear:both;"></div>

</div>