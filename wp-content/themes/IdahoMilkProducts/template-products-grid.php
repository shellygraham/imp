<?php
/*
Template Name: Products Grid
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
			    <div class="content-bg products">
					<div class="content-holder">
						<div class="default-content inner">
						<?php if( have_rows('products') ): while ( have_rows('products') ) : the_row(); ?>
							<div class="grid-item">
								<div class="content-holder">
						        	<img src="<?php the_sub_field('product_image'); ?>" alt="" />
									<div class="copy-holder">
										<h3><?php the_sub_field('product_title'); ?></h3>
										<?php the_sub_field('product_copy'); ?>
										<a href="<?php the_sub_field('product_link'); ?>">Learn More>></a>
									</div>
								</div>
							</div>
						<?php endwhile; endif; ?>
					<?php endwhile; endif; ?>
						</div>
					</div> 
			    </div> 
			    					
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>