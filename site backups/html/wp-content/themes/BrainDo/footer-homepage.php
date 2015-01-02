      <!-- FOOTER -->
			<footer class="footer" role="contentinfo">
		    <div class="row">
			    <!-- MEDIUM AND UP FOOTER -->
		    	<div class="small-11 medium-11 large-12 small-centered medium-centered large-centered columns show-for-medium-up" id="footer-row">
			    	<!-- FOOTER LEFT -->
            <div class="medium-6 columns" id="footerLeft">
              <?php 
							  $navlinks = CFS()->get('bottom_nav_loop_mup',21);
							  $navlinkslength = sizeof($navlinks);
							?>
							<ul>
							  <?php 
							    foreach($navlinks as $link){
								    $linktext = $link['bottom_nav_link_text'];
								    $linkhref = $link['bottom_nav_link_href'];
							    ?>
									<li>
								 		<a href="<?php echo $linkhref; ?>"><?php echo $linktext; ?></a>
								  </li>
							  <?php } ?>
							</ul>
				    </div>
				    <!-- END FOOTER LEFT -->
            <!-- FOOTER RIGHT -->
				    <div class="medium-6 columns" id="footerRight">
				    	<p>&copy; 2014 BrainDo Interactive Consulting<p>
				    </div>
				    <!-- END FOOTER RIGHT -->
			    </div>
			    <!-- END MEDIUM AND UP FOOTER -->	
			    <!-- SMALL FOOTER -->
			    <div class="show-for-small-only">
            <div class="small-10 small-centered columns" id="footerSmall">
							<?php 
								$navlinks = CFS()->get('bottom_nav_loop_small',21);
								$navlinkslength = sizeof($navlinks);
							?>
				     	<ul class="small-bottom-nav-links">
				       	<?php 
                  foreach($navlinks as $link){
								    $linktext = $link['bottom_nav_link_text'];
								    $linkhref = $link['bottom_nav_link_href'];
							  ?>
								<li>
								  <a href="<?php echo $linkhref; ?>"><?php echo $linktext; ?></a>
								  <?php
									  if($link != $navlinks[$navlinkslength-1]){
										  echo "|";
								    }
								  ?>
								</li>
								<?php } ?>
						  </ul>
						</div>
			    	</div>
			    	<!-- END SMALL FOOTER -->
			    </div>
		    </div>   	
			</footer> 
			<!-- END FOOTER -->
		</div>
		<!-- END PAGE WRAPPER -->
		<?php wp_footer(); ?>
		
		<!--[if lt IE 9]>
  		<script src="<?php echo get_template_directory_uri(); ?>/library/js/rem.min.js"></script>
    <![endif]-->
	</body>
</html>