<?php
/*
Template Name: 404
*/
get_header();
?>

<!-- FULL SCREEN BACKGROUND -->
<div class="background">
  <video class="hide-for-small"autoplay loop poster="<?php echo get_template_directory_uri(); ?>/library/images/headers/home.jpg" id="bgvid">
	  	<source src="<?php echo get_template_directory_uri(); ?>/library/images/headers/home.jpg" type="video/mp4">
  </video>
  <video class="hide-for-small"autoplay loop poster="<?php echo get_template_directory_uri(); ?>/library/images/headers/home.jpg" id="bgvid">
  </video>
</div>
<!-- END OF FULL SCREEN BACKGROUND -->

<!-- PAGE WRAPPER -->
<div class="page-wrapper">
  
  <?php include 'partials/top-nav.php' ?>
  
  <!-- HEADERS ROW -->
  <div class="row homepage-header">
  	<div class="small-12 columns">
      <h1 class="page-title">404 ERROR :(</h1>
      <center><p>(The page you requested does not exist)</p></center>
      <br />
      <br />
      <center><h4> Just click the logo to go home. Don't worry, we won't tell anyone about this little mishap. </h4></center>
      <br />
  	</div>
  </div>
  <!-- END OF HEADERS ROW -->

<?php 

  
?>  

<?php get_footer('homepage'); ?>