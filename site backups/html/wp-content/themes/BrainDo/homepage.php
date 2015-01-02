<?php
/*
Template Name: Homepage
*/
get_header();
$header = CFS()->get('page_header');
$sub_header = CFS()->get('page_sub_header');
$background_image = CFS()->get('background_image');
$background_video = CFS()->get('background_video');

?>

<!-- FULL SCREEN BACKGROUND -->
<div class="background">
  <video class="hide-for-small" autoplay loop poster="<?php echo get_template_directory_uri(); ?>/library/images/headers/<?php echo $background_image ?>" id="bgvid">
	  	<source src="<?php echo get_template_directory_uri(); ?>/library/images/headers/<?php echo $background_video ?>" type="video/mp4">
  </video>
  <video class="hide-for-small hide-for-medium-up" autoplay loop poster="<?php echo get_template_directory_uri(); ?>/library/images/headers/<?php echo $background_image ?>" id="bgvid">
  </video>
</div>
<!-- END OF FULL SCREEN BACKGROUND -->

<!-- PAGE WRAPPER -->
<div class="page-wrapper">
  
  <?php include 'partials/top-nav.php' ?>
  
  <!-- HEADERS ROW -->
  <div class="row homepage-header">
  	<div class="small-12 columns">
    	<div class="small-10 small-centered columns">
  			<h1 class="page-title"><?php echo $header ?></h1>
  			<h2 class="page-title-subheader"><?php echo $sub_header ?></h2>
      </div>
  	</div>
  </div>
  <!-- END OF HEADERS ROW -->

<?php 
  
include 'partials/areas-of-expertise.php'; 
include 'partials/contact-cta.php';
  
?>  

<?php get_footer('homepage'); ?>