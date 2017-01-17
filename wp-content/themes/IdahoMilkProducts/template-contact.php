<?php
/*
Template Name: Contact Info
*/
?>

<?php get_header(); ?>
	
	<div id="content" class="contact">
	
		<div id="inner-content" class="row">
	
		    <main id="main" role="main">
			    <div class="content-holder">
				    <div class="section-holder">
					    <div class="default-content">				
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
									
								<h1><?php the_title(); ?></h1>
												
							    <section class="entry-content map">
	
								</section>										
						    
						    <?php endwhile; endif; ?>
					    </div>	
					    <?php get_sidebar(); ?>
				    </div>
			    </div>
			    <div class="content-holder">
				    <div class="section-holder">
					    <section class="entry-content contact-info">
								<div class="address">
									<p>Address:</p>
									<h3><a href="<?php the_field('google_map_address') ?>" target="_blank"><?php the_field('address_street') ?><br>
									<?php the_field('address_city_state_zip') ?></a></h3>
								</div>
								<div class="phones">
									<p>Toll Free:</p>
									<h3><a href="tel:<?php the_field('phone_number') ?>"><?php the_field('phone_number') ?></a></h3>
									<p>Phone:</p>
									<h3><a href="tel:<?php the_field('local_phone_number') ?>"><?php the_field('local_phone_number') ?></a></h3>
									<p>Fax:</p>
									<h3><a href="tel:<?php the_field('fax_number') ?>"><?php the_field('fax_number') ?></a></h3>
								</div><!-- #footer-email-phone -->
						</section>
				    </div>
			    </div>						
			    					
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>