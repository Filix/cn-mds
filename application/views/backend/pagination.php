<div class="pagination">
    <?php if($page>1): ?>
    <a href="<?php echo site_url($uri.'?page=1') ?>" title="First Page">&laquo; First</a>
    <a href="<?php echo site_url($uri.'?page='.($page-1)) ?>" title="Previous Page">&laquo; Previous</a>
    <?php endif; ?>
    <a href="#" class="number current" title="<?php echo $page ?>"><?php echo $page ?></a>
    <a href="<?php echo site_url($uri.'?page='.($page+1)) ?>" title="Next Page">Next &raquo;</a>
</div> <!-- End .pagination -->