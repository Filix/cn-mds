<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <title>Simpla Admin</title>

        <!--                       CSS                       -->

        <!-- Reset Stylesheet -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>/public/css/backend/reset.css" type="text/css" media="screen" />

        <!-- Main Stylesheet -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>/public/css/backend/style.css" type="text/css" media="screen" />

        <!-- Invalid Stylesheet. This makes stuff look pretty. Remove it if you want the CSS completely valid -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>/public/css/backend/invalid.css" type="text/css" media="screen" />

        <!-- Colour Schemes
    
        Default colour scheme is green. Uncomment prefered stylesheet to use it.
    
        <link rel="stylesheet" href="<?php echo base_url(); ?>/public/css/backend/blue.css" type="text/css" media="screen" />
    
        <link rel="stylesheet" href="<?php echo base_url(); ?>/public/css/backend/red.css" type="text/css" media="screen" />
    
        -->

        <!-- Internet Explorer Fixes Stylesheet -->

        <!--[if lte IE 7]>
        <link rel="stylesheet" href="<?php echo base_url(); ?>/public/css/backend/ie.css" type="text/css" media="screen" />
        <![endif]-->

        <!--                       Javascripts                       -->

        <!-- jQuery -->
        <script type="text/javascript" src="<?php echo base_url(); ?>/public/js/backend/jquery-1.3.2.min.js"></script>

        <!-- jQuery Configuration -->
        <script type="text/javascript" src="<?php echo base_url(); ?>/public/js/backend/simpla.jquery.configuration.js"></script>

        <!-- Facebox jQuery Plugin -->
        <script type="text/javascript" src="<?php echo base_url(); ?>/public/js/backend/facebox.js"></script>

        <!-- jQuery WYSIWYG Plugin -->
        <script type="text/javascript" src="<?php echo base_url(); ?>/public/js/backend/jquery.wysiwyg.js"></script>

        <!-- jQuery Datepicker Plugin -->
        <script type="text/javascript" src="<?php echo base_url(); ?>/public/js/backend/jquery.datePicker.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>/public/js/backend/jquery.date.js"></script>
        <!--[if IE]><script type="text/javascript" src="<?php echo base_url(); ?>/public/js/backend/jquery.bgiframe.js"></script><![endif]-->


        <!-- Internet Explorer .png-fix -->

        <!--[if IE 6]>
        <script type="text/javascript" src="<?php echo base_url(); ?>/public/js/backend/DD_belatedPNG_0.0.7a.js"></script>
        <script type="text/javascript">
            DD_belatedPNG.fix('.png_bg, img, li');
        </script>
        <![endif]-->

    </head>

    <body><div id="body-wrapper"> <!-- Wrapper for the radial gradient background -->

            <div id="sidebar">
                <div id="sidebar-wrapper"> <!-- Sidebar with logo and menu -->

                    <h1 id="sidebar-title"><a href="#">Simpla Admin</a></h1>

                    <!-- Logo (221px wide) -->
                    <a href="#"><img id="logo" src="<?php echo base_url(); ?>/public/images/backend/logo.png" alt="Simpla Admin logo" /></a>

                    <!-- Sidebar Profile links -->
                    <div id="profile-links">
                        Hello, <?php echo $session['username'] ?><br />
                        <br />
                        <a target="_blank" href="<?php echo base_url(); ?>" title="访问前台">访问前台</a> | <a href="<?php echo site_url('backend/logout') ?>" title="退出">退出</a>
                    </div>

                    <ul id="main-nav">  <!-- Accordion Menu -->

                        <li>
                            <a href="<?php echo site_url('backend/dashboard'); ?>" class="nav-top-item no-submenu<?php echo $menu == 'dashboard' ? ' current' : ''; ?>"> <!-- Add the class "no-submenu" to menu items with no sub menu -->
                                首页
                            </a>
                        </li>

                        <li>
                            <a href="#" class="nav-top-item<?php echo $menu == 'article' ? ' current' : ''; ?>"> <!-- Add the class "current" to current menu item -->
                                文章管理
                            </a>
                            <ul>
                                <li><a href="<?php echo site_url('backend/article/createnews'); ?>">创建新闻</a></li>
                                <li><a href="<?php echo site_url('backend/article/createpicnews'); ?>">图片文章</a></li>
                                <li><a href="<?php echo site_url('backend/article'); ?>">新闻列表</a></li> <!-- Add class "current" to sub menu items also -->
                            </ul>
                        </li>

                        <li>
                            <a href="#" class="nav-top-item<?php echo $menu == 'category' ? ' current' : ''; ?>">
                                分类管理
                            </a>
                            <ul>
                                <li><a href="<?php echo site_url('backend/category') ?>">分类列表</a></li>
                                <li><a href="<?php echo site_url('backend/category/create') ?>">创建分类</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="nav-top-item<?php echo $menu == 'slide' ? ' current' : ''; ?>">
                                slide管理
                            </a>
                            <ul>
                                <li><a href="<?php echo site_url('backend/slide') ?>">slide列表</a></li>
                                <li><a href="<?php echo site_url('backend/slide/create') ?>">创建slide</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="nav-top-item<?php echo $menu == 'link' ? ' current' : ''; ?>">
                                链接管理
                            </a>
                            <ul>
                                <li><a href="<?php echo site_url('backend/link') ?>">链接列表</a></li>
                                <li><a href="<?php echo site_url('backend/link/create') ?>">创建链接</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#" class="nav-top-item<?php echo $menu == 'user' ? ' current' : ''; ?>">
                                用户管理
                            </a>
                            <ul>
                                <li><a href="#">Upload Images</a></li>
                                <li><a href="#">Manage Galleries</a></li>
                                <li><a href="#">Manage Albums</a></li>
                                <li><a href="#">Gallery Settings</a></li>
                            </ul>
                        </li>

                    </ul> <!-- End #main-nav -->
                </div>
            </div>
            <!-- End #sidebar -->

            <div id="main-content"> <!-- Main Content Section with everything -->

                <noscript> <!-- Show a notification if the user has disabled javascript -->
                    <div class="notification error png_bg">
                        <div>
                            Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
                            Download From <a href="http://www.exet.tk">exet.tk</a></div>
                    </div>
                </noscript>

                <!-- Page Head -->
                <h2>Welcome <?php echo $session['username'] ?>!</h2>

                <ul class="shortcut-buttons-set">

                    <li><a class="shortcut-button" href="<?php echo site_url('backend/article/createnews'); ?>">
                            <span>
                                <img src="<?php echo base_url(); ?>/public/images/backend/icons/pencil_48.png" alt="icon" /><br />
                                创建新闻
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="shortcut-button" href="<?php echo site_url('backend/article'); ?>">
                            <span>
                                <img src="<?php echo base_url(); ?>/public/images/backend/icons/paper_content_pencil_48.png" alt="icon" /><br />
                                文章列表
                            </span>
                        </a>
                    </li>

                    <li>
                        <a class="shortcut-button" href="<?php echo site_url('backend/slide') ?>">
                            <span>
                                <img src="<?php echo base_url(); ?>/public/images/backend/icons/image_add_48.png" alt="icon" /><br />
                                slide管理
                            </span>
                        </a>
                    </li>

                   

                    <li><a class="shortcut-button" href="<?php echo site_url('backend/category') ?>" rel="modal"><span>
                                <img src="<?php echo base_url(); ?>/public/images/backend/icons/comment_48.png" alt="icon" /><br />
                                分类管理
                            </span></a></li>

                </ul><!-- End .shortcut-buttons-set -->

                <div class="clear"></div> <!-- End .clear -->
                <?php echo $content; ?>

                <div id="footer">
                    <small> <!-- Remove this notice or replace it with whatever you want -->
                        &#169; Copyright 2012
                    </small>
                </div><!-- End #footer -->

            </div> <!-- End #main-content -->

        </div>
    </body>


    <!-- Download From www.exet.tk-->
</html>
