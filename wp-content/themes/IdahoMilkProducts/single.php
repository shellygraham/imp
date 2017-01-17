<?php get_header(); ?>
			
	<div id="content">
	
		<div id="inner-content" class="row">
	
		    <main id="main" role="main">
			    <div class="content-holder">
				    <div class="default-content">
		
				    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
				    	<?php get_template_part( 'parts/loop', 'single' ); ?>
				    	
				    <?php endwhile; else : ?>
				
				   		<?php get_template_part( 'parts/content', 'missing' ); ?>
		
				    <?php endif; ?>

				    </div>	
			    </div>						
			    					
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>