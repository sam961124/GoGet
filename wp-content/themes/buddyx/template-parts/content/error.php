<?php
/**
 * Template part for displaying the page content when an error has occurred
 *
 * @package buddyx
 */

namespace BuddyX\Buddyx;

?>
<section class="error">
	<?php get_template_part( 'template-parts/content/page_header' ); ?>

	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) {
			?>
			<p>
				<?php
				printf(
					wp_kses(
						/* translators: 1: link to WP admin new post page. */
						__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'buddyx' ),
						[
							'a' => [
								'href' => [],
							],
						]
					),
					esc_url( admin_url( 'post-new.php' ) )
				);
				?>
			</p>
			<?php
		} elseif ( is_search() ) {
			?>
			<p>
				<?php esc_html_e( '抱歉，沒有符合的搜索結果。請使用其他關鍵字再試一次。', 'buddyx' ); ?>
			</p>
			<?php
		} else {
			?>
			<p>
				<?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'buddyx' ); ?>
			</p>
			<?php
		}
        // commented out by Andy
		//get_search_form();
		?>
	</div><!-- .page-content -->
</section><!-- .error -->
