<?php if(!empty($positions) && is_array($positions)): ?>
<div id="notice">
    <div class="border">
        <h3 class="title">
            <span>您现在的位置 : <a href="<?php echo base_url();?>">网站首页</a>
            <?php foreach($positions as $position): ?>
                <?php if($position['url']): ?>
                &gt;&gt; <a href="<?php echo site_url($position['url']);?>"><?php echo $position['name'] ?></a>
                <?php else: ?>
                    &gt;&gt; <?php echo $position['name'] ?>
                <?php endif; ?>
            <?php endforeach; ?>
            </span>
        </h3>
        <div style="width: 749px;" class="content"></div>
    </div>
</div>
<?php endif; ?>