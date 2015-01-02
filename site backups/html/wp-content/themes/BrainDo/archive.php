<?php
$header = CFS()->get('blog_page_header', 21);
$sub_header =  CFS()->get('blog_page_subheader', 21);
$header_image = CFS()->get('blog_background_image', 21);
$header_video = CFS()->get('blog_background_video', 21);
?>

<?php get_header(); ?>
  <!-- PAGE WRAPPER -->
  <div class="page-wrapper header-background-page">
  
    <?php include 'partials/top-nav.php' ?>
    
    <!-- HEADER BACKGROUND -->
    <div class="header-bg">
      <img class="hide-for-small hide-for-medium-up" src="<?php echo get_template_directory_uri(); ?>/library/images/headers/<?php echo $header_image; ?>" />
      <video class="hide-for-small" autoplay loop poster="<?php echo get_template_directory_uri(); ?>/library/images/headers/<?php echo $header_image; ?>" id="headerbgvid">
        <source src="<?php echo get_template_directory_uri(); ?>/library/images/headers/<?php echo $header_video; ?>" type="video/mp4">
      </video>
    </div>
    <!-- END HEADER BACKGROUND -->
    
    <!-- HEADERS ROW -->
    <div class="row">
    	<div class="small-11 medium-12 small-centered columns">
      	<div class="small-12 medium-10 small-centered columns">
     			<h1 class="page-title"><?php echo $header; ?></h1>
          <h2 class="page-title-subheader"><?php echo $sub_header; ?></h2>
        </div>
    	</div>
    </div>
    <!-- END OF HEADERS ROW -->
		
		<div class="row">
  		<div class="small-10 medium-10 large-12 small-centered medium-centered large-uncentered columns blog-entries">
    	  <div class="small-12 medium-11 large-8 large-offset-1 small-centered medium-uncentered large-uncentered columns">		
  				
  					    <?php if (is_category()) { ?>
  						    <h1>
  							    <span><?php _e("Topic:", "jointstheme"); ?></span> <?php single_cat_title(); ?>
  					    	</h1>
  					    
  					    <?php } elseif (is_tag()) { ?> 
  						    <span class="blog-page-title"><?php single_tag_title(); ?></span>
  					    
  					    <?php } elseif (is_author()) {   					    	
  					    	$author = get_user_by( 'slug', get_query_var( 'author_name' ) );
                  $author_id = $author->ID;

  					    ?>
  						    <span class="blog-page-title"><?php _e("Posts By:", "jointstheme"); ?> <?php echo get_the_author_meta('display_name', $author_id); ?></span>
  					    <?php } elseif (is_day()) { ?>
  						    <h1>
  	    						<span><?php _e("Daily Archives:", "jointstheme"); ?></span> <?php the_time('l, F j, Y'); ?>
  						    </h1>
  		
  		    			<?php } elseif (is_month()) { ?>
  				    	   <span class="blog-page-title"><?php the_time('F Y'); ?></span>
  					
  					    <?php } elseif (is_year()) { ?>
  					        <h1>
  					    	    <span><?php _e("Yearly Archives:", "jointstheme"); ?></span> <?php the_time('Y'); ?>
  					        </h1>
  					    <?php } ?>
  
  					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  					
  					    	<?php get_template_part( 'partials/loop', 'archive' ); ?>
  					
  					    <?php endwhile; ?>		
  					
  					        <?php if (function_exists('joints_page_navi')) { ?>
  						        <?php joints_page_navi(); ?>
  					        <?php } else { ?>
  						        <nav class="wp-prev-next">
  							        <ul class="clearfix">
  								        <li class="prev-link"><?php next_posts_link(__('&laquo; Older Entries', "jointstheme")) ?></li>
  								        <li class="next-link"><?php previous_posts_link(__('Newer Entries &raquo;', "jointstheme")) ?></li>
  							        </ul>
  					    	    </nav>
  					        <?php } ?>
  					
  					    <?php else : ?>
  					
      						<?php get_template_part( 'partials/content', 'missing' ); ?>
  					
  					    <?php endif; ?>
    	  </div>
        <?php get_sidebar(); ?>
  		</div>
  </div>
    <!-- HIDE CONTACT CTA ON SMALL -->
  <div class="row hide-for-small">
    <?php include 'partials/contact-cta.php'; ?>
  </div>

  <?php 
  include 'partials/areas-of-expertise.php';   
  ?>

<?php get_footer('we-get-it-done'); ?>