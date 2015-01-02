<?php 
  
$lead_in_copy = CFS()->get('blog_lead_in_copy');

?>

<article class="row blog-entry" id="post-<?php the_ID(); ?>">
  
  <header class="small-12 medium-3 small-centered medium-uncentered columns blog-image">
 		<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
  </header>
						
	<section class="small-12 medium-9 small-centered medium-uncentered columns blog-content">
		<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
		<?php get_template_part( 'partials/content', 'byline' ); ?>
		<p><?php echo $lead_in_copy; ?></p>
    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="cta-button">Read More <span class="arrows"></span></a>
  	<p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'jointstheme') . '</span> ', ', ', ''); ?></p>
	</section>
					
</article> <!-- end article -->
