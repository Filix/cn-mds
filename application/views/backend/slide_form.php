<div class="content-box"><!-- Start Content Box -->

    <div class="content-box-header">

        <h3><?php if($article['aid']): ?>编辑slide  --  <?php echo $article['title'] ?><?php else: ?>创建slide<?php endif; ?></h3>

        
        <div class="clear"></div>

    </div> <!-- End .content-box-header -->

    <div class="content-box-content">

        <div class="tab-content default-tab" id="tab1">

            <form action="" method="post" enctype="multipart/form-data">
                <?php if($message): ?>
                <div class="notification attention png_bg">
                    <a href="#" class="close"><img src="<?php echo base_url(); ?>/public/images/backend/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
                    <div>
                        <?php echo $message; ?>
                    </div>
                </div>
                <?php endif; ?>
                <?php if($error): ?>
                <div class="notification error png_bg">
                    <a href="#" class="close"><img src="<?php echo base_url(); ?>/public/images/backend/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
                    <?php echo $error; ?>
                </div>
                <?php endif; ?>
                <fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->

                    <p>
                        <label>标 题</label>
                        <input type="hidden" name="id" value="<?php echo set_value('id') ? set_value('id') : $article['aid']; ?>"/>
                        <input class="text-input medium-input" type="text" id="small-input" name="title" value="<?php echo set_value('title') ? set_value('title') : $article['title']; ?>" /> 
                        <br /><small>最长30个字</small>
                    </p>
                    
                    <p>
                        <label>跳转地址</label>
                        <input class="text-input medium-input" type="text" name="redirect_url" value="<?php echo set_value('redirect_url') ? set_value('redirect_url') : $article['redirect_url']; ?>"/>
                        <br /><small>最长200个字</small>
                    </p>
                    
                    <p>
                        <label>上传图片</label>
                        <?php if($article['img']): ?>
                        <img src="<?php echo base_url(); ?>uploads/<?php echo $article['img'] ?>" width="200"  /><br>
                        <?php endif; ?>
                        <?php //echo form_upload('img', '', ' class="text-input medium-input"');?> 
                        <?php echo form_upload('img');?> 
                        <br /><small>最好上传990*245或等比例的图片</small>
                    </p>

                    <p>
                        <input class="button" type="submit" value="Submit" />
                    </p>

                </fieldset>

                <div class="clear"></div><!-- End .clear -->

            </form>

        </div> <!-- End #tab2 -->

    </div> <!-- End .content-box-content -->

</div> <!-- End .content-box -->


