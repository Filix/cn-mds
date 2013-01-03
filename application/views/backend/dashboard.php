<div class="content-box"><!-- Start Content Box -->

    <div class="content-box-header">

        <h3>上次记录</h3>

       
        <div class="clear"></div>

    </div> <!-- End .content-box-header -->

    <div class="content-box-content">

        <div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->

            <div class="notification success png_bg">
                <a href="#" class="close"><img src="<?php echo base_url(); ?>/public/images/backend/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
                <div>
                    <?php echo $session['username'] ?>, 您上次登陆的时间是: <?php echo $session['last_login'] ?>
                </div>
            </div>

        </div> <!-- End #tab1 -->

    </div> <!-- End .content-box-content -->

</div> <!-- End .content-box -->
