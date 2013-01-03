<style>
    #product-list li{ height:130px;}
</style>
<div id="product-list">
    <ul>
        <?php foreach($articles as $article): ?>
        <li>
            <span class="info_img">
                <a href="<?php echo site_url('article/'.$article['id'].'.html') ?>" target="_blank">
                    <img width="160" height="130" title="<?php echo $article['title'] ?>" alt="<?php echo $article['title'] ?>" src="<?php echo base_url();?>uploads/<?php echo $article['img'] ?>" />
                </a>
            </span>
            <span class="info_title"><b>名称：</b> <?php echo $article['title'] ?></span>
            <span class="info_title"><b>简介：</b></span>
            <span class="info_para1"><?php echo $article['content'] ?></span>
            <?php if($article['redirect_url']): ?>
            <span class="info_detail"><a target="_blank" href="<?php echo $article['redirect_url']; ?>">查看》</a></span>
            <?php endif; ?>
        </li>
        <?php endforeach; ?>
    </ul>
</div>