<?php
/*
Template Name: Full Width (No Sidebar)
*/
?>

<?php get_header(); ?>
			
	<div id="content">
	
		<div id="inner-content" class="row">
	
		    <main id="main" role="main">
				
				<div class="content-holder">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php the_content(); ?>
					
				<?php endwhile; endif; ?>
				</div>							

			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->

<?php get_footer(); ?>
