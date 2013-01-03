<div class="content-box"><!-- Start Content Box -->

    <div class="content-box-header">

        <h3>文章列表</h3>

        <div class="clear"></div>

    </div> <!-- End .content-box-header -->

    <div class="content-box-content">

        <div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->

            <table>

                <thead>
                    <tr>
                        <th>Id</th>
                        <th>标题</th>
                        <th>分类</th>
                        <th>点击数</th>
                        <th>创建时间</th>
                        <th>操作</th>
                    </tr>

                </thead>

                <tfoot>
                    <tr>
                        <td colspan="6">
                            <?php echo $pagination; ?>
                            <div class="clear"></div>
                        </td>
                    </tr>
                </tfoot>

                <tbody>
                    <?php foreach($articles as $article): ?>
                    <tr>
                        <td><a href="<?php echo site_url('backend/article/'.$article['aid'].'/edit') ?>"><?php echo $article['aid']; ?></a></td>
                        <td><?php echo $article['title'] ?></td>
                        <td><?php echo $article['name'] ?></td>
                        <td><?php echo $article['view_count'] ?></td>
                        <td><?php echo $article['created_at'] ?></td>
                        <td>
                            <!-- Icons -->
                            <a href="<?php echo site_url('backend/article/'.$article['aid'].'/edit') ?>" title="Edit"><img src="<?php echo base_url(); ?>/public/images/backend/icons/pencil.png" alt="Edit" /></a>
                            <a href="<?php echo site_url('backend/article/'.$article['aid'].'/delete') ?>" title="Delete"><img src="<?php echo base_url(); ?>/public/images/backend/icons/cross.png" alt="Delete" /></a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>

            </table>

        </div> <!-- End #tab1 -->

        <div class="tab-content" id="tab2">

            <form action="#" method="post">

                <fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->

                    <p>
                        <label>Small form input</label>
                        <input class="text-input small-input" type="text" id="small-input" name="small-input" /> <span class="input-notification success png_bg">Successful message</span> <!-- Classes for input-notification: success, error, information, attention -->
                        <br /><small>A small description of the field</small>
                    </p>

                    <p>
                        <label>Medium form input</label>
                        <input class="text-input medium-input datepicker" type="text" id="medium-input" name="medium-input" /> <span class="input-notification error png_bg">Error message</span>
                    </p>

                    <p>
                        <label>Large form input</label>
                        <input class="text-input large-input" type="text" id="large-input" name="large-input" />
                    </p>

                    <p>
                        <label>Checkboxes</label>
                        <input type="checkbox" name="checkbox1" /> This is a checkbox <input type="checkbox" name="checkbox2" /> And this is another checkbox
                    </p>

                    <p>
                        <label>Radio buttons</label>
                        <input type="radio" name="radio1" /> This is a radio button<br />
                        <input type="radio" name="radio2" /> This is another radio button
                    </p>

                    <p>
                        <label>This is a drop down list</label>
                        <select name="dropdown" class="small-input">
                            <option value="option1">Option 1</option>
                            <option value="option2">Option 2</option>
                            <option value="option3">Option 3</option>
                            <option value="option4">Option 4</option>
                        </select>
                    </p>

                    <p>
                        <label>Textarea with WYSIWYG</label>
                        <textarea class="text-input textarea wysiwyg" id="textarea" name="textfield" cols="79" rows="15"></textarea>
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


