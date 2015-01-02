<?php
  
$blog_banner_image = CFS()->get('blog_banner_image');

$employees = CFS()->get('employee_blocks',73);

foreach($employees as $employee){
  if($employee['employee_name'] == get_the_author()){
    $employee_name = $employee['employee_name'];
    $employee_title = $employee['employee_title'];
    $employee_bio = $employee['employee_description'];
    $employee_thumb = $employee['employee_image_url'];
  }
}
  
?>


<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
	<header class="article-header">
    <img class="alignnone size-full wp-image-311 banner-image" src="<?php echo get_template_directory_uri()?>/library/images/blog/<?php echo $blog_banner_image; ?>" alt="blog banner image" />
		<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
		<?php get_template_part( 'partials/content', 'byline' ); ?>
  </header> <!-- end article header -->
					
    <section class="entry-content clearfix" itemprop="articleBody">
  		<!--<?php the_post_thumbnail('full'); ?> -->
  		<?php the_content(); ?>
	  </section> <!-- end article section -->
						
	<footer class="article-footer">
		<p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'jointstheme') . '</span> ', ', ', ''); ?></p>
		
		<nav class="wp-prev-next">
      <ul class="clearfix">
        <li class="prev-link">
        <?php
          if(strlen(get_previous_post_link()) == 0){
            echo "No Previous Posts";
          }else{
            previous_post_link( '%link', '&laquo;  Previous Post', FALSE );
          } 
        ?>
        </li>
        | <li class="main-link"><a href="http://dev.brain.do/blog/">Main</a></li>|
        <li class="next-link">
          <?php
          if(strlen(get_next_post_link()) == 0){
            echo "No New Posts";
          }else{
            next_post_link( '%link', 'Next Post  &raquo;', FALSE );
          } 
        ?></li>
      </ul>
    </nav>
    
  </footer> <!-- end article footer -->
  <h3 class="contributor-header">About the Contributor</h3>
  <div class="contributor-container">
    <div class="contributor-image-wrapper">
      <img src="<?php echo get_template_directory_uri()?>/library/images/biopics/humans/<?php echo $employee_thumb; ?>" class="employee-thumb">
    </div>
    <div class="contributor-bio-wrapper">
      <p class="contributor-name"><?php the_author_posts_link(); ?></p>
      <p class="contributor-title"><?php echo $employee_title ?></p>
      <p class="contributor-bio"><?php echo $employee_bio; ?></p>
    </div>
  </div>
    
	<?php comments_template(); ?>	
								
</article> <!-- end article -->