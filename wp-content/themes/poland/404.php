<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package poland
 */

get_header();
?>

	<div class="page_error">
		<b>404</b>
		<p>Strona nie znaleziona</p>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Do głównego</a>
	</div>

<?php
get_footer();
