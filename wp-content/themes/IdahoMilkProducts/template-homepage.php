<?php
/*
Template Name: Homepage
*/
?>

<?php get_header('home'); ?>
	
	<div id="content" class="homepage">
	
		<div id="inner-content" class="row">
	
		    <main id="main" role="main">
				<?php get_template_part( 'parts/slider' ); ?>	

				<div id="large-intro">
					<div class="content-holder">
						<h1><?php the_field('home_introduction_text_title') ?></h1>
						<p><?php the_field('home_introduction_text') ?></p>
					</div>
				</div>
	
				<div id="knowledge-center-cta">
					<div class="content-holder">
						<h4><?php the_field('home_help_center_box_title') ?></h4>	
						<h3>Resource Center</h3>
						<div class="sub-holder">
							<img src="<?php the_field('knowledge_center_image') ?>" alt="knowledge center" />
							<div class="sub-holder-copy">
								<h4><?php the_field('home_knowledge_center_title') ?></h4>
								<p><?php the_field('home_knowledge_center_text') ?></p>
								<?php echo do_shortcode( '[searchandfilter submit_label=" " search_placeholder="Search" taxonomies="search" post_types="knowledge_center"]' ); ?>
							</div>
						</div>
					</div>
				</div>
	
				<div id="products">
					<div class="content-holder">
						<h3><?php the_field('top_products_section_title') ?></h3>
						<?php if( have_rows('top_products') ):
						
						    while ( have_rows('top_products') ) : the_row(); ?>
								
								<a href="<?php the_sub_field('product_link'); ?>">
								<div class="bucket">
							        <img src="<?php the_sub_field('product_icon'); ?>" alt="" />
							        <h4><?php the_sub_field('product_title'); ?></h4>
							        <?php the_sub_field('product_copy'); ?>  
								</div>
								</a>
						
						     <?php endwhile; ?>
						
						<?php endif; ?>
					</div>
				</div>
							
				    					
			</main> <!-- end #main -->

		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>