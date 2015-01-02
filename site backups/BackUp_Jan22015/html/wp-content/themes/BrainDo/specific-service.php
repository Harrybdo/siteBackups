<?php
/*
Template Name: Specific Service
*/
get_header(); 
?>

<?php
$header= CFS()->get('page_header');
$description_header = CFS()->get('description_header');
$page_description = CFS()->get('page_description');
$page_service_list = CFS()->get('services_list');
$infographic_url = CFS()->get('desktop_infographic');
$header_image = CFS()->get('background_image');
$header_video = CFS()->get('background_video');

?>

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
  	<div class="small-12 medium-12 columns">
    	<div class="small-11 medium-12 small-centered columns">
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
  
  <!-- main content -->
  <div class="row service-content">
  	<div class="small-10 medium-12 small-centered columns">
    	<!-- LEFT COLUMN-->
    	<div class="small-12 medium-6 medium-offset-1 columns">
			<!-- subheader + description -->
			<div class="row">
				<div class="small-12 columns">
  				<h3 class="service-description-header"><?php echo $description_header; ?></h3>
					<p class="service-description"><?php echo $page_description; ?></p>
        		</div>
      		</div><!-- end subheader+description -->


	        <!-- image in middle for small -->
	        <div class="row hide-for-medium-up">
	          <div class="small-12 columns">
	            <img class="service-small-image" src="<?php echo get_template_directory_uri();?>/library/images/infographics/<?php echo $infographic_url; ?>">
	          </div>
	        </div><!-- image for small -->


	        <!-- services list -->
	        <div class="row">
	          	<div class="small-12 columns">
	            	<h3 class="service-description-header"><?php echo $header;?> Services</h3>
                  <ul class="service-list">
		            	<?php foreach($page_service_list as $li){?>
      							<li class="service-list-item"><span class="arrow"></span><?php echo $li['service_item']; ?></li>
      						<?php 
      						}
      						?>
	          		</ul>
	        	</div>
	      	</div><!-- end service list -->
	    </div><!-- enedleft column-->

	    <!-- RIGHT COLUMN -->
	    <div class="small-12 medium-5 columns hide-for-small">
	      <img src="<?php echo get_template_directory_uri();?>/library/images/infographics/<?php echo $infographic_url; ?>">
	    </div><!-- end right column -->  
	</div>
</div><!-- end content -->

<!-- curious above blocks for medium up -->
<?php include 'partials/contact-cta.php'; ?>

<!-- Blocks Areas Of Expertise row-->
<?php include 'partials/areas-of-expertise.php'; ?>



<?php get_footer('curious'); ?>