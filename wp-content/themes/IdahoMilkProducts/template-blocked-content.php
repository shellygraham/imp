<?php
/*
Template Name: Blocked content
*/
?>

<?php get_header(); ?>
			
	<div id="content">
	
		<div id="inner-content" class="row">
	
		    <main id="main" role="main">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="block top">
					<div class="content-holder">
						<div class="copy-holder">
						<?php the_content(); ?>
						</div>
						<div class="top-img" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>)"></div>
					</div>
				</div>

						<?php if( have_rows('content_block') ):
						
						    while ( have_rows('content_block') ) : the_row(); ?>
								
								<div class="block">
									<div class="content-holder">
							        	<img src="<?php the_sub_field('block_image'); ?>" alt="" />
							        	<div class="copy-holder">
											<h4><?php the_sub_field('block_title'); ?></h4>
											<?php the_sub_field('block_copy'); ?>
											
											<?php if( have_rows('cta_buttons') ): ?>
											
												<ul class="btn-list">
											
											    <?php while ( have_rows('cta_buttons') ) : the_row(); ?>
												
													<li><a href="<?php the_sub_field('cta_button_link'); ?>" class="btn"><?php the_sub_field('cta_button_text'); ?></a></li>											
											    <?php endwhile; ?>

												</ul>

											<?php endif; ?>

							        	</div>
							        </div>
								</div>
						
						     <?php endwhile; ?>
						
						<?php endif; ?>

				<?php endwhile; endif; ?>							
						

			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->

<?php get_footer(); ?>
