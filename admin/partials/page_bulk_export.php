<div class="wrap">
	<h1><?php esc_html_e( 'Bulk Export Articles', 'apple-news' ) ?></h1>
	<p><?php esc_html_e( "The following articles will be published to Apple News. Once started, it might take a while, please don't close the browser window.", 'apple-news' ) ?></p>

	<ul class="bulk-export-list">
		<?php foreach ( $articles as $post ): ?>
		<li class="bulk-export-list-item" data-post-id="<?php echo esc_attr( $post->ID ) ?>">
			<span class="bulk-export-list-item-title">
				<?php echo esc_html( $post->post_title ) ?>
			</span>
			<span class="bulk-export-list-item-status pending">
				<?php esc_html_e( 'Pending', 'apple-news' ) ?>
			</span>
		</li>
		<?php endforeach; ?>
	</ul>

	<a class="button" href="<?php echo esc_url( menu_page_url( $this->plugin_slug . '_index', false ) ) ?>"><?php esc_html_e( 'Back', 'apple-news' ) ?></a>
	<a class="button button-primary bulk-export-submit" href="#"><?php esc_html_e( 'Publish All', 'apple-news' ) ?></a>
</div>
