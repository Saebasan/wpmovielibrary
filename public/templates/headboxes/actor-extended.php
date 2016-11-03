<?php
/**
 * Actor Headbox extended template.
 * 
 * @since    3.0
 * 
 * @uses    $headbox
 * @uses    $actor
 */

?>
	<div id="<?php echo $headbox->get_type(); ?>-headbox-<?php echo $headbox->id; ?>" class="wpmoly term-headbox <?php echo $headbox->get_type(); ?>-headbox theme-<?php echo $headbox->get_theme(); ?>">
		<div class="headbox-header">
			<div class="headbox-thumbnail">
				<img src="<?php echo $actor->get_picture(); ?>" alt="" />
			</div>
		</div>
		<div class="headbox-content clearfix">
			<div class="headbox-titles">
				<div class="headbox-title">
					<div class="term-title <?php echo $headbox->get_type(); ?>-title"><a href="<?php echo get_term_link( $actor->term, 'actor' ); ?>"><?php $actor->the_name(); ?></a></div>
				</div>
				<div class="headbox-subtitle">
					<div class="term-count <?php echo $headbox->get_type(); ?>-count"><?php printf( _n( '%d Movie', '%d Movies', $actor->term->count, 'wpmovielibrary' ), $actor->term->count ); ?></div>
				</div>
			</div>
			<div class="headbox-metadata">
				<div class="headbox-description">
					<div class="term-description <?php echo $headbox->get_type(); ?>-description"><?php $actor->the_description(); ?></div>
				</div>
			</div>
		</div>
	</div>
