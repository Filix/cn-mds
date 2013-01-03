<script type="text/javascript">
    $(window).load(function(){
        var simg = $('#web ul.news_list li span img');
        var cspan = $('#web ul.news_list li span');
        if(simg.length < 0){
            cspan.addClass('ie6span');
        }
    });
</script>
<ul class="news_list">
    <?php foreach($articles as $n): ?>
    <li>
        <span><?php echo substr($n['created_at'], 0, 10) ?></span>
        <a target="_blank" href="<?php echo site_url('news/'.$n['id'].'.html');?>"><?php echo $n['title']; ?></a>
    </li>
    <?php endforeach; ?>
</ul>