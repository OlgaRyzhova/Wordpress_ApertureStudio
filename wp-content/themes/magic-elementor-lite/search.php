<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Magic Elementor Lite
 */

$magic_elementor_lite_blog_container = get_theme_mod('magic_elementor_blog_container', 'mg-wrapper');
$magic_elementor_lite_blog_layout = get_theme_mod('magic_elementor_blog_layout', 'rightside');
$magic_elementor_lite_blog_style = get_theme_mod('magic_elementor_lite_blog_style', 'grid');

if ($magic_elementor_lite_blog_style == 'grid') {
	$magic_elementor_lite_mclass = 'mg-grid';
} else {
	$magic_elementor_lite_mclass = 'mg-flex';
}

if (is_active_sidebar('sidebar-1') && $magic_elementor_lite_blog_layout != 'fullwidth') {
	$magic_elementor_lite_blog_column = 'mg-grid-9';
} else {
	$magic_elementor_lite_blog_column = 'mg-grid-12';
}
get_header();
?>

<div class="<?php echo esc_attr($magic_elementor_lite_blog_container); ?> mg-main-blog">
	<div class="mg-flex">
		<?php if (is_active_sidebar('sidebar-1') && $magic_elementor_lite_blog_layout == 'leftside') : ?>
			<div class="mg-grid-3">
				<?php get_sidebar(); ?>
			</div>
		<?php endif; ?>
		<div class="<?php echo esc_attr($magic_elementor_lite_blog_column); ?>">
			<main id="primary" class="site-main">


				<?php if (have_posts()) : ?>

					<header class="page-header search-header">
						<h2 class="page-title">
							<?php
							/* translators: %s: search query. */
							printf(esc_html__('Search Results for: %s', 'magic-elementor-lite'), '<span>' . get_search_query() . '</span>');
							?>
						</h2>
					</header><!-- .page-header -->
					<div class="<?php echo esc_attr($magic_elementor_lite_mclass); ?>">

						<?php

						/* Start the Loop */
						while (have_posts()) :
							the_post();

							/**
							 * Run the loop for the search to output the results.
							 * If you want to overload this in a child theme then include a file
							 * called content-search.php and that will be used instead.
							 */
							get_template_part('template-parts/content', 'grid');

						endwhile;
						?>
					</div>
				<?php
					the_posts_pagination();

				else :

					get_template_part('template-parts/content', 'none');

				endif;
				?>

			</main><!-- #main -->
		</div>
		<?php if (is_active_sidebar('sidebar-1') && $magic_elementor_lite_blog_layout == 'rightside') : ?>
			<div class="mg-grid-3">
				<?php get_sidebar(); ?>
			</div>
		<?php endif; ?>
	</div>
</div>

<?php
get_footer();
