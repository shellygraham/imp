					<footer class="footer" role="contentinfo">
						<div id="inner-footer">
							<div class="content-holder">
							<?php $other_page = 36; ?> <!-- Get the page ID for the Contact page to retrieve ACF variables -->
								<div id="footer-email-phone" class="footer-section">
									<h3>Contact:</h3>
									<p>Email Us: <a href="mailto:<?php the_field('email', $other_page) ?>"><?php the_field('email', $other_page) ?></a></p>
									<p>Phone Us: <a href="tel:<?php the_field('phone_number', $other_page) ?>"><?php the_field('phone_number', $other_page) ?></a></p>
								</div><!-- #footer-email-phone -->
								<div id="footer-address" class="footer-section">
									<h3>Location:</h3>
									<p><a href="<?php the_field('google_map_address', $other_page) ?>" target="_blank"><?php the_field('address_street', $other_page) ?><br>
									<?php the_field('address_city_state_zip', $other_page) ?></br></a></p>
								</div><!-- #footer-address -->
								<div id="footer-brochure" class="footer-section">
									<h3>Download:</h3>
									<?php 
										$file = get_field('corporate_brochure', $other_page);
										if( $file ) {
											$url = wp_get_attachment_url( $file );	
											?><p><a href="<?php echo $url; ?>" target="_blank">Corporate Brochure</a></p><?php
										}
									?>
								</div><!-- #footer-brochure -->
							</div>
						</div>
						<div class="legal">
							<div class="content-holder">
								<div class="container-left">
									<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
								</div>
								<div class="container-right">
									<a href="/privacy-policy">Privacy Policy</a><!--  | <a href="terms-conditions">Terms and Conditions</a> -->
								</div>
							</div>
						</div> <!-- end #inner-footer -->
					</footer> <!-- end .footer -->
				</div>  <!-- end .main-content -->
		<?php wp_footer(); ?>
	</body>
	<script type="text/javascript" src="http://imp.koopman-ostbo.com/wp-content/themes/IdahoMilkProducts/vendor/vendor/jquery.js"></script>
	<script type="text/javascript" src="http://imp.koopman-ostbo.com/wp-content/themes/IdahoMilkProducts/vendor/vendor/what-input.js"></script>
	<script type="text/javascript" src="http://imp.koopman-ostbo.com/wp-content/themes/IdahoMilkProducts/vendor/vendor/foundation.min.js"></script>
	<script type="text/javascript" src="http://imp.koopman-ostbo.com/wp-content/themes/IdahoMilkProducts/vendor/app.js"></script>
	<script type="text/javascript" src="http://imp.koopman-ostbo.com/wp-content/themes/IdahoMilkProducts/assets/js/custom.js"></script>
</html> <!-- end page -->