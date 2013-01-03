<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <title>cn-mds | 管理中心</title>

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

        <!-- Internet Explorer .png-fix -->

        <!--[if IE 6]>
        <script type="text/javascript" src="<?php echo base_url(); ?>/public/js/backend/DD_belatedPNG_0.0.7a.js"></script>
        <script type="text/javascript">
            DD_belatedPNG.fix('.png_bg, img, li');
        </script>
        <![endif]-->

    </head>

    <body id="login">

        <div id="login-wrapper" class="png_bg">
            <div id="login-top">

                <h1>管理中心</h1>
                <!-- Logo (221px width) -->
                <img id="logo" src="<?php echo base_url(); ?>/public/images/backend/logo.png" alt="Simpla Admin logo" />
            </div> <!-- End #logn-top -->

            <div id="login-content">

                <?php echo form_open('backend'); ?>
                <?php if ($error): ?>
                    <div class="notification information png_bg">
                        <div>
                            <?php echo $error; ?>
                        </div>
                    </div>
                <?php endif; ?>
                <p>
                    <label>Username</label>
                    <input class="text-input" type="text" name="username" value="<?php echo set_value('username'); ?>" />
                </p>
                <div class="clear"></div>
                <p>
                    <label>Password</label>
                    <input class="text-input" type="password" name="password" value="<?php echo set_value('password'); ?>"  />
                </p>
                <div class="clear"></div>
                <p id="remember-password">
                    <input type="checkbox" name="rememberme" value="<?php echo set_value('rememberme'); ?>"  />Remember me
                </p>
                <div class="clear"></div>
                <p>
                    <input class="button" type="submit" value="Sign In" />
                </p>

                </form>
            </div> <!-- End #login-content -->

        </div> <!-- End #login-wrapper -->

    </body>
</html>
