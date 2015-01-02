<?php
/*
Template Name: Right Off-canvas
*/
?>

<?php get_header(); ?>
	<div class="off-canvas-wrap" data-offcanvas>
	  <div class="inner-wrap">
	    <nav class="tab-bar">
	      <section class="left-small">
	        <a class="left-off-canvas-toggle menu-icon" href="#"><span></span></a>
	      </section>

	      <section class="middle tab-bar-section">
	        <h1 class="title">Foundation</h1>
	      </section>

	      <section class="right-small">
	        <a class="right-off-canvas-toggle menu-icon" href="#"><span></span></a>
	      </section>
	    </nav>

	    <aside class="left-off-canvas-menu">
	      <ul class="off-canvas-list">
	        <li><label>Foundation</label></li>
	        <li><a href="#">The Psychohistorians</a></li>
	        <li><a href="#">...</a></li>
	      </ul>
	    </aside>

	    <aside class="right-off-canvas-menu">
	      <ul class="off-canvas-list">
	        <li><label>Users</label></li>
	        <li><a href="#">Hari Seldon</a></li>
	        <li><a href="#">...</a></li>
	      </ul>
	    </aside>

	    <section class="main-section">
	      <div id="content">
				
					<div id="inner-content" class="row clearfix">
				
					    <div id="main" class="large-8 medium-8 columns first clearfix" role="main">

						    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						
						    	<?php get_template_part( 'partials/loop', 'page' ); ?>
						    					
						    <?php endwhile; else : ?>
						
						   		<?php get_template_part( 'partials/content', 'missing' ); ?>

						    <?php endif; ?>
		
					    </div> <!-- end #main -->
	    
					    <?php get_sidebar(); ?>
					    
					</div> <!-- end #inner-content -->
	    
				</div> <!-- end #content -->
	    </section>

	  <a class="exit-off-canvas"></a>

	  </div>
	</div>
			
<?php get_footer(); ?>
