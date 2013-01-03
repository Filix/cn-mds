<div class="content-box"><!-- Start Content Box -->

    <div class="content-box-header">

        <h3><?php if($article['aid']): ?>编辑新闻  --  <?php echo $article['title'] ?><?php else: ?>创建新闻<?php endif; ?></h3>

        
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
                        <label>标 题</label>
                        <input type="hidden" name="id" value="<?php echo set_value('id') ? set_value('id') : $article['aid']; ?>"/>
                        <input maxlength="30" class="text-input medium-input" type="text" id="small-input" name="title" value="<?php echo set_value('title') ? set_value('title') : $article['title']; ?>" /> 
                        <br /><small>最长30个字</small>
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
                        <label>内 容</label>
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


