<?php
/*
Template Name: About Us
*/
get_header(); 
?>

<?php
$header_image = CFS()->get('background_image');  
$header_video = CFS()->get('background_video');

$header = CFS()->get('page_header');
$sub_header = CFS()->get('page_sub_header');
$first_paragraph = CFS()->get('first_paragraph');
$paragraph_header_1 = CFS()->get('paragraph_header_1');
$paragraph_text_1 = CFS()->get('paragraph_text_1');
$paragraph_header_2 = CFS()->get('paragraph_header_2');
$paragraph_text_2 = CFS()->get('paragraph_text_2');
$block_header = CFS()->get('block_header');
$dog_block_header = CFS()->get('dog_block_header');
$employee_block_header = CFS()->get('employee_block_header');
$employees = CFS()->get('employee_blocks');
$dogs = CFS()->get('dog_blocks');
$employee_service_images = array("Analtyics"=>"","Strategy"=>"","Creative"=>"","Development"=>"","Search"=>"");
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
    	<div class="small-12 medium-12 columns">
  			<h1 class="page-title"><?php echo $header ?></h1>
        <h2 class="page-title-subheader"><?php echo $sub_header ?></h2>
      </div>
  	</div>
  </div>
  <!-- END OF HEADERS ROW -->

<!-- main content -->
<div class="row">
  <div class="small-10 small-centered medium-12 columns us-description">
  	<div class="small-12 medium-10 small-centered medium-centered columns">
  		<p><?php echo $first_paragraph; ?></p>
  		<h3><?php echo $paragraph_header_1; ?></h3>
  		<p><?php echo $paragraph_text_1; ?></p>
  		<h3><?php echo $paragraph_header_2; ?></h3>
  		<p><?php echo $paragraph_text_2; ?></p>
  	</div>
  </div>
</div>

<!-- BRAIN DUDES TITLE-->
<div class="row">
	<div class="small-10 medium-12 small-centered columns meet-the-team">
		<h3><?php echo $employee_block_header; ?></h3>
    <!-- BRAIN DUDES M-UP -->
    <div class="show-for-medium-up">
    		<?php 
    	$employees_loaded = 0; 
    	$total_employees = count($employees);
    		
    	for($employees_loaded = 0; $employees_loaded < $total_employees; $employees_loaded++){
    		$name = $employees[$employees_loaded]['employee_name'];
    		$title = $employees[$employees_loaded]['employee_title'];
    		
    		$description = $employees[$employees_loaded]['employee_description'];
    		$hoverImageURL = $employees[$employees_loaded]['employee_hover_image_url'];
    		$imageURL = $employees[$employees_loaded]['employee_image_url'];
    		$selectedImageURL = $employees[$employees_loaded]['employee_selected_image_url'];
        $employee_service_loop = $employees[$employees_loaded]['employee_service_loop'];
        $clean_title = $employee_service_loop[0]['employee_service'] . "<br />" . $employee_service_loop[1]['employee_service'];

    		if($employees_loaded%5 == 0){
    		  $blocks_added = 0;
          $selectedImages = array();
          $selectedDescriptions = array();
          $bionames = array();
          $biotitles = array();
          $row_services = array();
    		?>	
    		<div class="row">
    			<ul class="medium-block-grid-5">
    <?php } ?>	
    				<li class="employee-block" id="employee-block-<?php echo $employees_loaded; ?>">
    					<div class="nohover-state">
    						<img src="<?php echo get_template_directory_uri(); ?>/library/images/biopics/humans/<?php echo $imageURL; ?>">
    					</div>
    					<div class="show-for-medium-up">
    						<div class="hover-state">
    							<img src="<?php echo get_template_directory_uri(); ?>/library/images/biopics/humans/<?php echo $hoverImageURL; ?>">
    							<span class="employee-block-title"><?php echo $name ?></span>
    							<span class="employee-block-text"><?php echo $clean_title ?></span>		
    						</div>
    					</div>
    				</li>
    	<?php
      	$bionames[$blocks_added] = $name;
      	$biotitles[$blocks_added] = $title;
        $selectedImages[$blocks_added] = $selectedImageURL;
        $selectedDescriptions[$blocks_added] = $description;
        $row_services[$blocks_added] = $employee_service_loop;
    		$blocks_added++;
    		
    		if(($employees_loaded+1)%5 == 0){
    	?>
    			</ul>
    		</div>
    		
    			<?php for($j = $blocks_added, $selected = 0; $j > 0; $j--, $selected++){
    			?>
    			<div class="row employee-slider" id="employee-slider-<?php echo (($employees_loaded+1)-$j); ?>">
    				<div class="medium-12 columns">
    					<img src="<?php echo get_template_directory_uri(); ?>/library/images/biopics/humans/<?php echo $selectedImages[$selected]; ?>">
    					<div class="employee-info">
      					<h3 class="bio-name"><?php echo $bionames[$selected]; ?></h3>
                <p><?php echo $selectedDescriptions[$selected]; ?></p>
                <ul class="services-list"> 
                  <?php 
                  foreach($row_services[$selected] as $employee_services_list){
                    $service_item = $employee_services_list['employee_service'];
                    $service_item_href = $employee_services_list['employee_service_href'];
                    ?>
                    <li><a href="<?php echo $service_item_href; ?>">#<?php echo $service_item; ?></a></li>
                  <?php } ?>
                </ul>
    					</div>
    				</div>
    			</div>
    	
    		<?php 
    			}
    		}
    	}
    	if(($employees_loaded+1)%5 !== 0){
    	?>
    			</ul>
    		</div>
    		<?php for($k = $blocks_added, $selected = 0; $k > 0; $k--, $selected++){
    		?>
    			<div class="row employee-slider" id="employee-slider-<?php echo (($employees_loaded)-$k); ?>">
    				<div class="medium-12 columns">
    					<img src="<?php echo get_template_directory_uri(); ?>/library/images/biopics/humans/<?php echo $selectedImages[$selected]; ?>">
              <div class="employee-info">
      					<h3 class="bio-name"><?php echo $bionames[$selected]; ?></h3>
                <p><?php echo $selectedDescriptions[$selected]; ?></p>
                <ul class="services-list"> 
                  <?php 
                  foreach($row_services[$selected] as $employee_services_list){
                    $service_item = $employee_services_list['employee_service'];
                    $service_item_href = $employee_services_list['employee_service_href'];
                    ?>
                    <li><a href="<?php echo $service_item_href; ?>">#<?php echo $service_item; ?></a></li>
                  <?php } ?>
                </ul>
    					</div>
    				</div>
    			</div>
    		<?php
    			}
    		}
    		?>
    </div><!-- end BRAIN DUDES M-UP -->
  
    <!-- BRAIN DUDES SMALL -->
    <div class="show-for-small-only">
    	<?php 
    	$employees_loaded = 0; 
    	$total_employees = count($employees);
    		
    	for($employees_loaded = 0; $employees_loaded < $total_employees;$employees_loaded++){
    		$name = $employees[$employees_loaded]['employee_name'];
    		$title = $employees[$employees_loaded]['employee_title'];
    		$description = $employees[$employees_loaded]['employee_description'];
    		$imageURL = $employees[$employees_loaded]['employee_image_url'];
    		
    		
    		if($employees_loaded%2 == 0){
      		$blocks_added = 0;
          $selectedImages = array();
          $selectedDescriptions = array();
          $bionames = array();
          $biotitles = array();
    		?>	
    		<div class="row">
    			<ul class="small-block-grid-2">
    	<?php } ?>	
    				<li class="employee-block" id="employee-block-<?php echo $employees_loaded; ?>">
    					<div class="nohover-state">
    						<img src="<?php echo get_template_directory_uri(); ?>/library/images/biopics/humans/<?php echo $imageURL; ?>">
    						<span class="employee-block-text"><?php echo $name ?></span>
    					</div>
    				</li>
    	<?php 
    		$bionames[$blocks_added] = $name;
      	$biotitles[$blocks_added] = $title;
        $selectedImages[$blocks_added] = $selectedImageURL;
        $selectedDescriptions[$blocks_added] = $description;
    		$blocks_added++;
    		if(($employees_loaded+1)%2 == 0){
    	?>
    			</ul>
    		</div>
    		  <?php for($j = $blocks_added, $selected = 0; $j > 0; $j--, $selected++){
    			?>
    			<div class="row employee-slider-small" id="employee-slider-small-<?php echo (($employees_loaded+1)-$j); ?>">
    				<div class="small-12 columns">
    					<h3 class="bio-name"><?php echo $bionames[$selected]; ?></h3>
              <h4 class="bio-title"><?php echo $biotitles[$selected]; ?></h4>
              <p><?php echo $selectedDescriptions[$selected]; ?></p>
    				</div>
    			</div>
    	<?php	}
    	  }
      }
    	if(($employees_loaded)%2 !== 0){
    	?>
    			</ul>
    		</div>
    		<?php for($k = $blocks_added, $selected = 0; $k > 0; $k--, $selected++){
    		?>
    			<div class="row employee-slider-small" id="employee-slider-small-<?php echo (($employees_loaded)-$k); ?>">
    				<div class="small-12 columns">
              <h3 class="bio-name"><?php echo $bionames[$selected]; ?></h3>
              <h4 class="bio-title"><?php echo $biotitles[$selected]; ?></h4>
              <p><?php echo $selectedDescriptions[$selected]; ?></p>
    				</div>
    			</div>
    		<?php
    			}
    		}
    		?>
    </div><!-- end BRAIN DUDES small -->
  
    <!-- BRAINDOGS row -->
    <div class="row brain-dogs">
    	<div class="small-12 columns">
    		<h3><?php echo $dog_block_header; ?></h3>
    		<ul class="small-block-grid-2 medium-block-grid-5">
    			<?php 
    			foreach($dogs as $dog){
    				$name = $dog['dog_name'];
    				$title = $dog['dog_title'];
    				$imageURL = $dog['dog_image_url'];
    				$hoverImageURL = $dog['dog_hover_image_url'];
    			?>
    			
    				<li class="dog-block">
    					<div class="nohover-state">
    						<img src="<?php echo get_template_directory_uri(); ?>/library/images/biopics/dogs/<?php echo $imageURL; ?>">
    					</div>
    					<div class="show-for-medium-up">
    						<div class="hover-state">
    							<img src="<?php echo get_template_directory_uri(); ?>/library/images/biopics/dogs/<?php echo $hoverImageURL; ?>">
    							<span class="dog-block-title"><?php echo $name ?></span>
    							<span class="dog-block-text"><?php echo $title ?></span>
    						</div>
    					</div>
    				</li>
    				
    			<?php 
    			} 
    			?>
    		</ul>
    	</div>
    </div><!-- end BRAINDOGS row -->
  </div>

<?php 
include 'partials/areas-of-expertise.php'; 
?>


<?php get_footer('homepage'); ?>