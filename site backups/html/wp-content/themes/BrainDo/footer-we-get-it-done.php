  		<!-- FOOTER -->
  		<footer class="footer" role="contentinfo">
    		<!-- MEDIUM AND UP FOOTER -->
    		<div class="show-for-medium-up">
  				<div class="row">
    				<div class="large-12 medium-11 columns medium-centered large-centered" id="footer-row">
    				 	<div class="large-12 medium-12 columns">
      				 	<!-- MEDIUM & UP FOOTER LEFT -->
    				    <div class="medium-8 columns end" id="footerLeft">
    				 	    <div class="row">
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
                  <div class="row">
    								<p>&copy; 2014 BrainDo Consulting</p>
    						  </div>
    						</div>
    						<!-- END MEDIUM & UP FOOTER LEFT -->
    						<!-- MEDIUM & UP FOOTER RIGHT -->					    	
                <div class="medium-4 columns" id="footerRight">
                  <span class="pre-footer-text">We Get It. We Get It Done.</span>
    				    </div>
    				    <!-- END MEDIUM & UP FOOTER RIGHT -->
    				  </div>
    		    </div>
    		  </div>
    		</div>
    		<!-- END MEDIUM AND UP FOOTER -->
    		<!-- SMALL FOOTER -->
  		  <div class="show-for-small-only">
  				<div class="row" id="footer-row">
						<div class="small-footer-text small-10 small-centered columns">
				  		<span class="pre-footer-text">We Get It. We Get It Done.</span>
						</div>
  				</div>
  				
  				<div class="row">
						<div class="small-10 small-centered columns">
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
  		  </div>
  		  <!-- END SMALL FOOTER -->
  		</footer>
  		<!-- END FOOTER -->
    </div>
		<!-- END PAGE WRAPPER -->
		<?php wp_footer(); ?>
	</body>
</html>