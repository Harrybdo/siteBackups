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
  <script>
    // Include the UserVoice JavaScript SDK (only needed once on a page)
    UserVoice=window.UserVoice||[];(function(){var uv=document.createElement('script');uv.type='text/javascript';uv.async=true;uv.src='//widget.uservoice.com/xpgeyoNGmFEUN1EPioy9zg.js';var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(uv,s)})();
    
    //
    // UserVoice Javascript SDK developer documentation:
    // https://www.uservoice.com/o/javascript-sdk
    //
    
    // Set colors
    UserVoice.push(['set', {
      accent_color: '#0498aa',
      trigger_color: 'white',
      trigger_background_color: '#0498aa'
    }]);
    
    // Identify the user and pass traits
    // To enable, replace sample data with actual user traits and uncomment the line
    UserVoice.push(['identify', {
      //email:      'john.doe@example.com', // User’s email address
      //name:       'John Doe', // User’s real name
      //created_at: 1364406966, // Unix timestamp for the date the user signed up
      //id:         123, // Optional: Unique id of the user (if set, this should not change)
      //type:       'Owner', // Optional: segment your users by type
      //account: {
      //  id:           123, // Optional: associate multiple users with a single account
      //  name:         'Acme, Co.', // Account name
      //  created_at:   1364406966, // Unix timestamp for the date the account was created
      //  monthly_rate: 9.99, // Decimal; monthly rate of the account
      //  ltv:          1495.00, // Decimal; lifetime value of the account
      //  plan:         'Enhanced' // Plan name for the account
      //}
    }]);
    
    // Add default trigger to the bottom-right corner of the window:
    UserVoice.push(['addTrigger', { mode: 'contact', trigger_position: 'bottom-right' }]);
    
    // Or, use your own custom trigger:
    //UserVoice.push(['addTrigger', '#userVoice', { mode: 'contact' }]);
    
    // Autoprompt for Satisfaction and SmartVote (only displayed under certain conditions)
    UserVoice.push(['autoprompt', {}]);
  </script>

<?php get_footer('we-get-it-done'); ?>