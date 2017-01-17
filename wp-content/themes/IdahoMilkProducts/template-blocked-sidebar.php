<?php
/*
Template Name: Blocked with Sidebar
*/
?>

<?php get_header(); ?>
	
	<div id="content" class="blocked-sidebar">
	
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
				    </div>
					<div class="content-holder">
						<div class="default-content inner">
						<?php if( have_rows('content_section') ): while ( have_rows('content_section') ) : the_row(); ?>
							<div class="block">
								<div class="content-holder">
						        	<img src="<?php the_sub_field('content_image'); ?>" alt="" />
									<div class="copy-holder">
										<?php the_sub_field('content_content'); ?>
									</div>
								</div>
							</div>
						<?php endwhile; endif; ?>
					<?php endwhile; endif; ?>
						</div>
						<?php get_sidebar(); ?>
					</div>    
				    			    					
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>