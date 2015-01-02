<?php get_header(); 
  
$header = CFS()->get('blog_page_header', 21);
$sub_header = CFS()->get('blog_page_subheader', 21);
$header_image = CFS()->get('blog_background_image', 21);
$header_video = CFS()->get('blog_background_video', 21);

?>

  <!-- PAGE WRAPPER -->
  <div class="page-wrapper header-background-page">
    <?php include 'partials/top-nav.php' ?>
    <div class="header-bg">
      <img class="hide-for-small hide-for-medium-up" src="<?php echo get_template_directory_uri(); ?>/library/images/headers/<?php echo $header_image; ?>" />
      <video class="hide-for-small" autoplay loop poster="<?php echo get_template_directory_uri(); ?>/library/images/headers/<?php echo $header_image; ?>" id="headerbgvid">
        <source src="<?php echo get_template_directory_uri(); ?>/library/images/headers/<?php echo $header_video; ?>" type="video/mp4">
      </video>
    </div>
    
    <!-- HEADERS ROW -->
    <div class="row">
    	<div class="small-10 medium-12 small-centered columns">
      	<div class="small-12 medium-10 small-centered columns">
    		  <?php if (strlen($header) > 30) { ?>
    			<h1 class="page-title extra-extended-title"><?php echo $header; ?></h1>  	
        	<?php } else if (strlen($header) > 20) { ?>
    			<h1 class="page-title extended-title"><?php echo $header; ?></h1>
          <?php } else { ?>
     			<h1 class="page-title"><?php echo $header; ?></h1>
     			<?php } ?>
        </div>
    	</div>
    </div>
    <!-- END OF HEADERS ROW -->
  
		<div class="row">
  		<div class="small-10 medium-11 columns small-centered medium-centered blog-content">
  		  <div class="small-12 medium-11 large-8 large-offset-1 small-centered medium-centered large-uncentered columns">			
  			  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  			   	
  			   	<?php get_template_part( 'partials/loop', 'single' ); ?>
  			   	
          <?php endwhile; else : ?>
            
            <?php get_template_part( 'partials/content', 'missing' ); ?>
  		    
  		    <?php endif; ?>				
  		  </div> <!-- end left 8 -->
		    <?php get_sidebar(); ?>
		  </div>
	  </div>
  </div>
  
<?php get_footer('we-get-it-done'); ?>