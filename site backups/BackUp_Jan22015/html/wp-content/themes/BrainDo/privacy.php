<?php
/*
Template Name: Privacy
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
      <h1 class="page-title">Privacy Policy</h1>
      <p>Your privacy is very important to us. Accordingly, we have developed this Policy in order for you to understand how we collect, use, communicate and disclose and make use of personal information. The following outlines our privacy policy.</p>
      <br />
      <ul>
        <li>Before or at the time of collecting personal information, we will identify the purposes for which information is being collected.</li>
        <li>We will collect and use of personal information solely with the objective of fulfilling those purposes specified by us and for other compatible purposes, unless we obtain the consent of the individual concerned or as required by law.</li>
        <li>We will only retain personal information as long as necessary for the fulfillment of those purposes.</li>
        <li>We will collect personal information by lawful and fair means and, where appropriate, with the knowledge or consent of the individual concerned.</li>
        <li>Personal data should be relevant to the purposes for which it is to be used, and, to the extent necessary for those purposes, should be accurate, complete, and up-to-date.</li>
        <li>We will protect personal information by reasonable security safeguards against loss or theft, as well as unauthorized access, disclosure, copying, use or modification.</li>
        <li>We will make readily available to customers information about our policies and practices relating to the management of personal information.</li>
        <br />
        <p>We are committed to conducting our business in accordance with these principles in order to ensure that the confidentiality of personal information is protected and maintained.</p>
      </ul>
  	</div>
  </div>
  <!-- END OF HEADERS ROW -->

<?php 

  
?>  

<?php get_footer('homepage'); ?>