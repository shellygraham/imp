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
						<h2 class="results">Showing <?php global $wp_query; echo $wp_query->found_posts.' results'; ?></h2>
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						 
								<!-- To see additional archive styles, visit the /parts directory -->
								<?php get_template_part( 'parts/loop', 'archive' ); ?>
							    
							<?php endwhile; ?>	
			
								<?php joints_page_navi(); ?>
									
						    <?php endif; ?>
						</div>
					</div>
					<?php get_sidebar(); ?>
			    </div>
		    </main> <!-- end #main -->
		
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>