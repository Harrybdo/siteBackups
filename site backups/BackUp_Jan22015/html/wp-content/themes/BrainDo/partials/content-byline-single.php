<div class="post-author-date">
  <div class="byline-author-date">
    <span class="date"><strong>Date:&nbsp;</strong><?php the_time('M n, Y');?></span>
    <?php echo "&nbsp;&nbsp;&raquo;&nbsp;&nbsp;&nbsp;"; ?><span class="author"><strong>Author:</strong>&nbsp;<?php the_author_posts_link(); ?></span>
  </div>
  <br />
  <div class="byline-tags">
    <?php the_tags('<span class="tags-title">' . __('<strong>Tags:</strong>', 'jointstheme') . '</span> ', ', ', '');?>
  </div>
</div>	
