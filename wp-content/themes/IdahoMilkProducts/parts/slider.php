<?php masterslider(1); ?>

				<div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
				  <ul class="orbit-container">
						<?php 
						  $temp = $wp_query; 
						  $wp_query = null; 
						  $wp_query = new WP_Query(); 
						  $wp_query->query('post_type=homepage_slide'); 
						?>
						<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
				    <li class="is-active orbit-slide">
				      <img class="orbit-image" src="<?php the_field('slide_image'); ?>" alt="">
				    </li>
				    
				    	<?php endwhile; ?>
				    	<?php wp_reset_postdata(); ?>
				  </ul>
				</div>