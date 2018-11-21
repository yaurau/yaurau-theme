<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package yaurau-theme
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php yaurau_theme_post_thumbnail(); ?>
		<?php
		the_content();
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'yaurau-theme' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
