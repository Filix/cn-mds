<div class="content-box"><!-- Start Content Box -->

    <div class="content-box-header">

        <h3><?php if($article['aid']): ?>编辑  --  <?php echo $article['name'] ?><?php else: ?>创建图片文章<?php endif; ?></h3>

        
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
                        <label>图片名称</label>
                        <input type="hidden" name="id" value="<?php echo set_value('id') ? set_value('id') : $article['aid']; ?>"/>
                        <input type="hidden" name="category_id" value="<?php echo set_value('category_id') ? set_value('category_id') : $article['category_id']; ?>"/>
                        <input class="text-input medium-input" max_length="30" type="text" id="small-input" name="title" value="<?php echo set_value('title') ? set_value('title') : $article['title']; ?>" /> 
                        <br /><small>最长30个字</small>
                    </p>
                    
                    <p>
                        <label>跳转地址</label>
                        <input class="text-input medium-input" type="text" name="redirect_url" value="<?php echo set_value('redirect_url') ? set_value('redirect_url') : $article['redirect_url']; ?>"/>
                        <br /><small>选填，最长200个字</small>
                    </p>
                    <p>
                        <label>分 类</label>
                        <?php $c = set_value('category_id') ? set_value('category_id') : $article['category_id']; ?>
                        <select name="category_id" class="small-input">
                            <option value="">--请选择分类--</option>
                            <?php  foreach($categories as $category): ?>
                            <option value="<?php echo $category['id'] ?>" <?php echo $c==$category['id'] ? 'selected="selected"' : '' ?>><?php echo $category['name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </p>
                    
                    <p>
                        <label>上传图片</label>
                        <?php if($article['title']): ?>
                        <img src="<?php echo base_url(); ?>uploads/<?php echo $article['img'] ?>" width="200"  /><br>
                        <?php endif; ?>
                        <?php echo form_upload('img', '', ' class="text-input medium-input"');?> 
                        <br /><small>必填是图片</small>
                    </p>

                    <p>
                        <label>描 述</label>
                        <textarea class="text-input textarea wysiwyg" id="textarea" name="content" cols="79" rows="15">
                            <?php echo set_value('content') ? set_value('content') : $article['content']; ?>
                        </textarea>
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


