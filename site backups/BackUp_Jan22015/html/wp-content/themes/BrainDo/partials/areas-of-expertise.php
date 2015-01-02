<?php

$expertise_header = CFS()->get('expertise_header',21); 
$blocks = CFS()->get('expertise_block_loop',21);
$contact_cta_link_text = CFS()->get('contact_cta_link_text',21);
$contact_cta_link_href = CFS()->get('contact_cta_link_href',21);
$blocklength = count($blocks);
$i = 0;

?>

<!-- AREAS OF EXPERTISE -->
<div class="row">
  <div class="small-10 medium-11 large-12 columns small-centered medium-centered large-centered areas-of-expertise">
  	<div class="small-12 medium-12 large-12 small-centered columns">
    	<?php if (is_page(27)){} else { ?>
  		<h3 class="expertise-block-title"><?php echo $expertise_header; ?></h3>
      <?php } ?>
   		<ul class="large-block-grid-<?php echo $blocklength; ?> medium-block-grid-5 small-block-grid-1">
        <?php
          foreach($blocks as $block){
            $no_hover_text = $block['no_hover_text'];
    	      $no_hover_image_url = $block['no_hover_image_url'];
    	      $expanded_description = $block['expanded_description'];
    	      $hover_list_items = $block['hover_list_items'];
    	      $href = $block['href'];
    	  ?>
        <li class="block">
        	<a href="<?php echo $href;?>">
            <?php if (is_page(27)){ ?>
    		    <div class="expertiseBlock services-hover" id="expertiseBlock<?php echo $i; ?>">
      		  <?php } else{ ?>
            <div class="expertiseBlockContainer" id="expertiseBlock<?php echo $i; ?>">
              <div class="expertiseBlock non-services">
            <?php } ?>
      		      <div class="nohover-state">
    		          	<img src="<?php echo get_template_directory_uri(); ?>/library/images/expertiseblocks/<?php echo $no_hover_image_url; ?>" height="80" width="120">
                    <span class="nohover-text"><?php echo $no_hover_text; ?></span>
    		        </div>
      		      <?php if (is_page(27)){} else { ?>
      		      <div class="show-for-medium-up hover-state">
    		            <ul>
    	                <?php
    	                  foreach($hover_list_items as $li){
    			                $list_item_text = $li['list_item_text'];
    			                //$list_item_href = $list_item['list_item_link'];
    			            ?>
    	                  <li><?php echo $list_item_text; ?></li>
    			            <?php } ?>
    		            </ul>
    		        </div>
              </div>
            </div>  
            <?php } ?>
          </a>
        </li>
        <div class="small-slider" id="mobilePanel<?php echo str_replace('/', '', $blocks[$i]['no_hover_text']); ?>">
          <div class="slider-content">
            <p class="extended-description"><?php echo $block['expanded_description']; ?></p>
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
            <a href="<?php echo $contact_cta_link_href; ?>" class="cta-button"><?php echo $contact_cta_link_text; ?><span class="arrows"></span></a>
          </div>
        </div>
       <?php $i++; } ?>
    	</ul>
    </div>
  </div>
</div>
<!-- END AREAS OF EXPERTISE -->