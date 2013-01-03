<div class="content-box"><!-- Start Content Box -->

    <div class="content-box-header">

        <h3>编辑分类  --  <?php echo $category['name'] ?></h3>

        
        <div class="clear"></div>

    </div> <!-- End .content-box-header -->

    <div class="content-box-content">

        <div class="tab-content default-tab" id="tab1">

            <form action="" method="post">
                <?php if($message): ?>
                <div class="notification attention png_bg">
                    <a href="#" class="close"><img src="<?php echo base_url(); ?>/public/images/backend/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
                    <div>
                        <?php echo $message; ?>
                    </div>
                </div>
                <?php endif; ?>
                <?php if(validation_errors()): ?>
                <div class="notification error png_bg">
                    <a href="#" class="close"><img src="<?php echo base_url(); ?>/public/images/backend/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
                    
                        <?php echo validation_errors(); ?>
                    
                </div>
                <?php endif; ?>
                    
                <fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->

                    <p>
                        <label>名 称</label>
                        <input type="hidden" name="id" value="<?php echo set_value('id') ? set_value('id') : $category['id']; ?>" />
                        <input class="text-input small-input" type="text" id="name" maxlength="10" name="name" value="<?php echo set_value('name') ? set_value('name') : $category['name']; ?>" />
                        <br /><small>最长45个字</small>
                    </p>

                    <p>
                        <label>在菜单显示</label>
                        <input type="checkbox" name="show_on_menu" id="show_on_menu" value="1" <?php $show_on_menu = set_value('show_on_menu') ? set_value('show_on_menu') : $category['show_on_menu']; echo $show_on_menu ? 'checked="checked"' : '' ?> />是
                    </p>

                    <p>
                        <label>显示顺序</label>
                        <input class="text-input small-input" type="text" id="order" name="order" value="<?php echo set_value('order') ? set_value('order') : $category['order']; ?>" />
                    </p>
                    <p>
                        <label>显示方式</label>
                        <?php $a = set_value('show_type') ? set_value('show_type') : $category['show_type']; ?>
                        <select name="show_type" class="small-input">
                            <option value="ARTICLE" <?php echo $a=='ARTICLE' ? 'selected="selected"' : '' ?> >文章方式</option>
                            <option value="PHOTO" <?php echo $a=='PHOTO' ? 'selected="selected"' : '' ?>>图片方式</option>
                        </select>
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


