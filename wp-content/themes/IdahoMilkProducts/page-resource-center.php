<?php get_header(); ?>
			
	<div id="content">

		<div id="inner-content" class="row">
	
		    <main id="main" role="main">
			    <div class="content-holder search">
					<header>
						<h1>Search</h1>
						<?php echo do_shortcode( '[searchandfilter submit_label=" " taxonomies="search,custom_cat" post_types="knowledge_center" search_placeholder="Enter text"]' ); ?>
					</header>
			    </div>
				<div class="content-holder search-results">
					<div class="default-content">
						<div class="entry-content">
						<h2 class="results">Showing all resource center articles</h2>
						<?php 
						  $temp = $wp_query; 
						  $wp_query = null; 
						  $wp_query = new WP_Query(); 
						  $wp_query->query('showposts=10&post_type=knowledge_center'.'&paged='.$paged); 
						?>
						<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
							<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">					
								<header class="article-header">
									<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
								</header> <!-- end article header -->
												
								<section class="entry-content" itemprop="articleBody">
									<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('full'); ?></a>
									<?php the_excerpt(); ?>...
									<a href="<?php the_permalink() ?>" class="read-more">Learn more >></a>
								</section> <!-- end article section -->
													
								<footer class="article-footer">
							    	<p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'jointstheme') . '</span> ', ', ', ''); ?></p>
								</footer> <!-- end article footer -->				    						
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
						</div>
					</div>
					<?php get_sidebar(); ?>
			    </div>
		    </main> <!-- end #main -->
		
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
