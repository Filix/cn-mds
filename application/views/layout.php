<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0033)http://www.metinfo.cn/demo/metv2/ -->
<html xmlns="http://www.w3.org/1999/xhtml"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>网站关键词-网站名称</title>
    <meta name="description" content="网站描述，一般显示在搜索引擎搜索结果中的描述文字，用于介绍网站，吸引浏览者点击。">
    <meta name="keywords" content="网站关键词">
    <meta name="author" content="网站名称">
    <meta name="copyright" content="Copyright 2008-2012 MetInfo">
    <link href="" rel="shortcut icon">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/public/css/metinfo.css">
    <script src="<?php echo base_url();?>/public/js/public.js" type="text/javascript" language="javascript"></script>
    <link href="<?php echo base_url();?>/public/css/reset.css" rel="stylesheet" type="text/css">
    <script src="<?php echo base_url();?>/public/js/jquery-1.4.2.metinfo.js" language="javascript"></script>
    <script type="text/javascript">
        $(function(){
            var navdown = $('#nav_10001');
            navdown.addClass('navdown');
            var margueedom = $('#notice marquee');
            var twidth = $('#notice h3.title');
            var cwidth = $('#notice div.content');
            var widthx = $('#notice div.border').width() - twidth.width() - 20;
            cwidth.width(widthx);

        });
        function onnav(my,id){
            var ul = document.getElementById('navul-'+id);
            var width = $(my).width();
            $(my).addClass('navdown');
            $(ul).css('display','block');
            $(ul).width(width);
        }
        function outnav(my,id){
            var ul = document.getElementById('navul-'+id);
            $(my).removeClass('navdown');
            $(ul).css('display','none');
        }
    </script>
    <script>window["_GOOG_TRANS_EXT_VER"] = "1";</script>
</head>
<!--[if IE 6]>
<script src="<?php echo base_url();?>/public/js/DD_belatedPNG_0.0.8a-min.js" type="text/javascript"></script>
<script type="text/javascript">
    DD_belatedPNG.fix('.bg,img');
</script>
<![endif]-->
<body>
<div id="metinfo">
    <!-- header begin -->
    <?php echo $header ?>
    <!-- header end -->
    <!-- notice begin -->
    <?php echo $notice; ?>
    <!-- notice end -->
    <!-- main begin -->
    <?php echo $main ?>
    <!-- main end -->
    <div id="footer">
        <div class="nav"><a href="http://www.metinfo.cn/demo/metv2/news/news_4_1.html" title="公司动态">公司动态</a><span>|</span><a href="http://www.metinfo.cn/demo/metv2/message/" title="在线留言">在线留言</a><span>|</span><a href="http://www.metinfo.cn/demo/metv2/feedback/" title="在线反馈">在线反馈</a><span>|</span><a href="http://www.metinfo.cn/demo/metv2/link/" title="友情链接">友情链接</a><span>|</span><a href="http://www.metinfo.cn/demo/metv2/sitemap/" title="网站地图">网站地图</a></div>
        <div class="text">
            <ul>
                <li>我的网站 版权所有 2008-2012 湘ICP备8888888 </li>
                <li>电话：0731-12345678 12345678  QQ:88888888 999999  Email:metinfo@metinfo.cn</li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>
