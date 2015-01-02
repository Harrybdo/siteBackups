<?php
/*
Template Name: Work
*/
get_header(); 

$header_image = CFS()->get('background_image');
$header_video = CFS()->get('background_video');

$header = CFS()->get('page_header');
$sub_header = CFS()->get('page_sub_header');
$case_studies = CFS()->get('case_study_loop');
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
  	<div class="small-10 medium-12 small-centered columns">
    	<div class="small-12 medium-10 small-centered medium-centered columns">
  			<h1 class="page-title"><?php echo $header ?></h1>
        <h2 class="page-title-subheader"><?php echo $sub_header ?></h2>
      </div>
  	</div>
  </div>
  <!-- END OF HEADERS ROW -->
  
  <!-- CASE STUDIES -->
  <div class="row">
   	<div class="small-10 medium-11 small-centered medium-centered columns case-studies">
      <?php
      	foreach($case_studies as $study){
    		  $study_header = $study['case_study_header'];
          $study_infographic_url = $study['case_study_infographic_url'];
          $study_text = $study['case_study_text'];
          $study_services_header = $study['services_header'];
          $study_services = $study['service_block_loop'];
          $results_text = $study['results_text'];
          $results_url = $study['results_href'];
    	?>
    	<!-- CASE STUDY - <?php echo $study_header; ?> -->
      <div class="row case-study">
        <div class="small-12 medium-12 small-centered medium-centered columns">
      		<div class="small-12 medium-6 columns left-content">
      			<a href="<?php echo $results_url; ?>"><img src="<?php echo get_template_directory_uri().'/library/images/infographics/'. $study_infographic_url; ?>" alt="study infographic"></a>
      		</div>
      		<div class="small-12 medium-6 columns right-content">
      			<h3><a href="<?php echo $results_url; ?>"><?php echo $study_header; ?></a></h3>
      			<p><?php echo $study_text; ?></p>
      			<h4><?php echo $study_services_header; ?></h4>
      			<div class="service-images">
      				<?php 
      				foreach($study_services as $service){
      					$block_url = $service['small_service_images'];
      				?>
                <img src="<?php echo get_template_directory_uri(); ?>/library/images/expertiseblocks/service-block-<?php echo $block_url; ?>.png" alt="expertise used" class="work-blocks" width="75" height="56">
      				<?php } ?>
      			</div>
            <a href="<?php echo $results_url; ?>" class="cta-button"><?php echo $results_text; ?> <span class="arrows"></span></a>
      		</div>
        </div>
      </div>
      <!-- END CASE STUDY -->
      <?php } ?>
   	</div>
  </div>
  <!-- END CASE STUDIES -->
  <?php get_footer('we-get-it-done') ?>
