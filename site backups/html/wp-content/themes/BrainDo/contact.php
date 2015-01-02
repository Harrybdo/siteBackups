<?php
/*
Template Name: Contact Us
*/
get_header();
$header = CFS()->get('page_header');
$sub_header = CFS()->get('page_sub_header');
$form_header = CFS()->get('form_header');
$join_the_team_header = CFS()->get('join_the_team_header');
$join_the_team_content = CFS()->get('join_the_team_content');
$address = CFS()->get('address');
$social_icons = CFS()->get('social_buttons',21);
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
  	<div class="small-10 small-centered columns">
    	<div class="small-12 columns">
  			<h1 class="page-title"><?php echo $header ?></h1>
        <h2 class="page-title-subheader"><?php echo $sub_header ?></h2>
      </div>
  	</div>
  </div>
  <!-- END OF HEADERS ROW -->
  
  <!-- CONTACT US PAGE CONTENTS -->
  <div class="row contact-us">
  	<div class="small-10 medium-4 medium-offset-1 columns medium-uncentered small-centered">
  		<span class="form-header"><?php echo $form_header; ?></span>
  		<!-- CONTACT US FORM -->
  		<form id="contactUsForm" method="POST" novalidate>
				<div class="row">
					<div class="small-12 small-centered columns left">
						<input type="text" name="name" id="name" placeholder="NAME"/>
						<small class="error">Name is required.</small>
					</div>
				</div>
				<div class="row">
					<div class="small-12 small-centered columns left">
						<input type="email" name="email" id="email" placeholder="EMAIL"/>
						<small class="error">Email Address is required.</small>
					</div>
				</div>
				<div class="row">
					<div class="small-12 small-centered columns left">
						<textarea type="text" name="message" id="message" cols="5" rows="5" placeholder="MESSAGE"></textarea>
						<small class="error">Message is required.</small>
						<button type="submit" value="Submit" class="cta-button">Submit<span class="arrows"></span></button>
					</div>
				</div>
			</form>
			<!-- END CONTACT US FORM -->
			
			<!-- JOIN THE TEAM -->
      <div class="join-the-team">
    		<h3><?php echo $join_the_team_header; ?></h3>
        <p><?php echo $join_the_team_content; ?></p>
      </div>
  		<!-- END JOIN THE TEAM -->
  	</div>
  	
  	
  	<div class="small-10 medium-5 columns medium-offset-1 medium-uncentered small-centered address">
  		<span><?php echo $address; ?></span>
  		<div id="googleMap"></div>
  	</div>
  </div>
  
  <div class="show-for-small-only">
  	<div class="row">
    	<div class="small-12 columns social-grid-columns">
    		<ul class="small-block-grid-<?php echo $num_buttons; ?>" id="contact-social-list">
    		<?php foreach($social_buttons as $social_button){
    			$image = $social_button['social_image_dark'];
    			$href = $social_button['social_href'];
    		?>
    		<li><a href="<?php echo $href; ?>"><img class="social-icon" src="<?php echo get_template_directory_uri() . $image; ?>"></a></li>
    		<?php } ?>	
    		</ul>
    	</div>
  	</div>
  </div>
<?php get_footer('we-get-it-done'); ?>