<?php
/*
Template Name: Services
*/
get_header(); 

$header = CFS()->get('page_header');
$sub_header =  CFS()->get('page_sub_header');

$blocks = CFS()->get('expertise_block_loop',21);
$blocklength = sizeof($blocks);
$i = 0;
$blocks = CFS()->get('expertise_block_loop',21);
$block = $blocks[0]; //set to strategy by default 

if ($service= get_query_var('service') ) {
  switch($service){
    case "strategy":
    	$block = $blocks[0];
    	break;
    case "analytics":
    	$block = $blocks[1];
    	break;
    case "development":
    	$block = $blocks[2];
    	break;
    case "search":
    	$block = $blocks[3];
    	break;
    case "creative":
    	$block = $blocks[4];
    	break;
    default: 
    	$block = $blocks[0];
		break;
  }
}
$service_name = $block['no_hover_text'];
$expanded_description = $block['expanded_description'];
$block_list_items = $block['hover_list_items'];
$contact_cta_text = CFS()->get('contact_cta_text',21);
$contact_cta_link_text = CFS()->get('contact_cta_link_text',21);
$contact_cta_link_href = CFS()->get('contact_cta_link_href',21);
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
    	<div class="small-12 medium-12 medium-centered small-centered columns">
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

  <?php include 'partials/areas-of-expertise.php' ?>
  
  <!-- SERVICE PANEL -->
  <div class="services hide-for-small">
    <div class="row expertise-expanded">
      <span class="triangle"></span>
      <?php 
      for($i = 0; $i < $blocklength; $i++){
      	$block = $blocks[$i];
      ?>
      <!-- SERVICE CONTENT - <?php echo $blocks[$i]['no_hover_text']; ?> --> 
      <div class="servicePanel show-for-medium-up" id="servicePanel<?php echo str_replace('/', '', $blocks[$i]['no_hover_text']); ?>">
        <div class="medium-12 columns service-content">
          <!-- LEFT SERVICE CONTENT - <?php echo $blocks[$i]['no_hover_text']; ?> -->    
  				<div class="medium-4 medium-offset-1 columns left-service">
  					<h3 class="extended-description-title"><?php echo $block['no_hover_text']; ?></h3>
  					<p class="extended-description"><?php echo $block['expanded_description']; ?></p>
            <a href="<?php echo $contact_cta_link_href; ?>" class="cta-button"><?php echo $contact_cta_link_text; ?> <span class="arrows"></span></a>
    	    </div>
  	      <!-- END LEFT SERVICE CONTENT - <?php echo $blocks[$i]['no_hover_text']; ?> -->
  	      <!-- RIGHT SERVICE CONTENT - <?php echo $blocks[$i]['no_hover_text']; ?> --> 
  	  		<div class="medium-6 columns right-service">
  		      <ul class="extended-list-items">
  					  <?php
  						foreach($block['hover_list_items'] as $li){
  			       	$list_item_text = $li['list_item_text'];
  							$list_item_href = $li['list_item_link'];
  			
  							if(strlen($list_item_href) == 0){
  			      ?>
  			      <li><span class="arrow"></span><?php echo $list_item_text; ?></li>
  						<?php }else{ ?>
  						<li><span class="arrow"></span><a href="<?php echo $list_item_href; ?>"><?php echo $list_item_text; ?></a></li>
  						<?php 
    						} 
  						}
  						?>
  					</ul>
  	      </div>
  	      <!-- END RIGHT SERVICE CONTENT - <?php echo $blocks[$i]['no_hover_text']; ?> --> 
  	    </div>
  	  </div>
      <!-- END SERVICE CONTENT - <?php echo $blocks[$i]['no_hover_text']; ?> -->
      <?php 
      }
      ?>
    </div>
  </div>
  <!-- END SERVICE PANEL --> 
<?php get_footer('we-get-it-done'); ?>
