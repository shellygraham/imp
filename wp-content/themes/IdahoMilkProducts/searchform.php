<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<label>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search', 'jointswp' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'jointswp' ) ?>" />
	</label>
<!-- 	<input type="submit" class="search-submit button" placeholder="Search" value="<?php echo esc_attr_x( 'Search', 'jointswp' ) ?>" /> -->
</form>