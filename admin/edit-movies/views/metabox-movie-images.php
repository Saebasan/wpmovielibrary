
	<div class="no-js-alert hide-if-js"><?php _e( 'It seems you have JavaScript deactivated; the import feature will not work correctly without it, please check your browser\'s settings.', WPML_SLUG ); ?></div>

	<div id="tmdb_images_preview" class="hide-if-no-js">
		<ul>
			<?php echo WPML_Media::get_movie_imported_images() ?>
			<li class="tmdb_movie_images tmdb_movie_imported_image"><a href="#" id="tmdb_load_images"><?php _e( 'Load Images', 'wpml' ); ?></a></li>
		</ul>
	</div>
	<div style="clear:both"></div>
