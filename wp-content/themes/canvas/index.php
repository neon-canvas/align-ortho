<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package clientcanvas
 */

get_header(); ?>

<main id="main" class="site-main" role="main">
	<section class="blog-hero">
		<div class="container-fluid" style="position: relative;">
			<h1>The Align Orthodontics Blog</h1>
		</div>
	</section>
	<section class="content">
		<div class="container-fluid">
			<?php
			if ( have_posts() ) :

				if ( is_home() && ! is_front_page() ) : ?>

				<?php
				endif;

				/* Start the Loop */
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', get_post_format() );

				endwhile;

				wp_pagenavi();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>
		</div>
	</section>
</main>

<?php get_footer(); ?>
