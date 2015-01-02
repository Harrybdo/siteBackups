<?php
/*
Template Name: Case Study
*/
get_header(); 

$header = CFS()->get('page_header');
$sub_header = CFS()->get('page_sub_header');
$challenge_header = CFS()->get('challenge_header');
$challenge_content = CFS()->get('challenge_content');
$solution_header = CFS()->get('solution_header');
$solution_content = CFS()->get('solution_content');
$results_header = CFS()->get('results_header');
$results_content = CFS()->get('results_content');
$header = CFS()->get('page_header');
$paragraphs = CFS()->get('left_column_paragraph_loop');
$case_study_image_url = CFS()->get('case_study_image_url');

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
  	<div class="small-10 medium-12 small-centered columns">
    	<div class="small-12 medium-12 small-centered columns">
  		  <?php if (strlen($header) > 30) { ?>
  			<h1 class="page-title extra-extended-title"><?php echo $header; ?></h1>  	
      	<?php } else if (strlen($header) > 20) { ?>
  			<h1 class="page-title extended-title"><?php echo $header; ?></h1>
        <?php } else { ?>
   			<h1 class="page-title"><?php echo $header; ?></h1>
   			<?php } ?>
        <h2 class="page-title-subheader"><?php echo $sub_header ?></h2>
      </div>
  	</div>
  </div>
  <!-- END OF HEADERS ROW -->


  <!-- CASE STUDY INFORMATION -->
  <div class="row case-study-information">
  	<div class="small-10 small-centered columns">
    	<!-- LEFT COLUMN-->
    	<div class="small-12 medium-6 small-centered medium-uncentered columns">
  			<div class="row">
	  			<div class="small-12 columns">
  	  			<div class="challenge">
  					  <h3 class="page-subtitle"><?php echo $challenge_header; ?></h3>
  					  <?php echo $challenge_content; ?>
  	  			</div>
  	  			<div class="solution">
  					  <h3 class="page-subtitle"><?php echo $solution_header; ?></h3>
              <?php echo $solution_content; ?>
  	  			</div>
  	  			<div class="results">
  					  <h3 class="page-subtitle"><?php echo $results_header; ?></h3>
  					  <?php echo $results_content; ?>
  	  			</div>
          </div>
        </div>
        <!-- LEFT COLUMN SMALL CONTENT -->
        <div class="row hide-for-medium-up">
          <div class="small-12 columns small-infographic-panel">
	        <img src="<?php echo get_template_directory_uri();?>/library/images/infographics/<?php echo $case_study_image_url; ?>">    
          </div>
        </div>
        <!-- END LEFT COLUMN SMALL CONTENT -->
	    </div>
	    <!-- END LEFT COLUMN -->

	    <!-- RIGHT COLUMN -->
	    <div class="small-12 medium-6 columns hide-for-small mup-infographic-panel">
	        <img src="<?php echo get_template_directory_uri();?>/library/images/infographics/<?php echo $case_study_image_url; ?>">    
	    </div>
	    <!-- END RIGHT COLUMN -->  
	  </div>
  </div>
  <!-- END CASE STUDY INFORMATION -->
  
  <?php include 'partials/use-case.php'; ?>
  
  <!-- HIDE CONTACT CTA ON SMALL -->
  <div class="row hide-for-small">
    <?php include 'partials/contact-cta.php'; ?>
  </div>

  <?php 
  include 'partials/areas-of-expertise.php';   
  ?>
    
<?php get_footer('homepage'); ?>