<?php
  $background_image = CFS()->get('background_image');
  $background_video = CFS()->get('background_video');
?>

<div class="header-bg">
  <video autoplay loop poster="<?php echo get_template_directory_uri(); ?>/library/images/headers/<?php echo $background_image; ?>" id="headerbgvid">
    <source src="<?php echo get_template_directory_uri(); ?>/library/images/headers/<?php echo $background_video; ?>" type="video/mp4">
  </video>
</div>