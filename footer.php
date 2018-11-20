<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package yaurau-theme
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
				<?php
				/* translators: 1: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'yaurau-theme' ), 'yaurau-theme', '<a href="https://github.com/yaurau">Rauvtovich Yauhen</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
