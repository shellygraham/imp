<?php
/*
Template Name: Default with Sidebar
*/
?>

<?php get_header(); ?>
	
	<div id="content">
	
		<div id="inner-content" class="row">
	
		    <main id="main" role="main">
			    <div class="content-holder">
				    <div class="default-content">				
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
							<header class="article-header">
								<?php
						
								if(get_field('page_title'))
								{
									echo '<h2>' . get_field('page_title') . '</h2>';
									echo '<h1 class="page-title hidden">';
										 the_title();
									echo '</h1>';
								}
								else {
									echo '<h1 class="page-title">';
									the_title();
									echo '</h1>';
								} ?>
						
							</header> <!-- end article header -->
											
						    <section class="entry-content">
							    <?php the_content(); ?>
							</section> <!-- end article section -->
				    <?php get_sidebar(); ?>

					    <?php endwhile; endif; ?>
				    </div>	
			    </div>						
			    					
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>