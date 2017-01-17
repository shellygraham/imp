<?php
/*
Template Name: All News
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

							<?php 
							  $temp = $wp_query; 
							  $wp_query = null; 
							  $wp_query = new WP_Query(); 
							  $wp_query->query('showposts=10&post_type=news_posts'.'&paged='.$paged); 
							?>
							<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
								<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">
									<header class="article-header">								
										<h4><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
									</header>
													
									<section class="entry-content" itemprop="articleBody">
										<?php the_excerpt(); ?>
									</section> <!-- end article section -->
					    						
								</article> <!-- end article -->
							<?php endwhile; ?>
							
							<nav class="pagination">
							    <p class="prev"><?php previous_posts_link('<< Previous') ?></p>
							    <p class="next"><?php next_posts_link('Next >>') ?></p>
							</nav>
							
							<?php 
							  $wp_query = null; 
							  $wp_query = $temp;  // Reset
							?>
							</section> <!-- end article section -->
							<?php get_sidebar(); ?>

					    <?php endwhile; endif; ?>
				    </div>	
			    </div>						
			    					
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>