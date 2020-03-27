<?php
/**
* 404 error page
* @package Canvas
**/
get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="bgvideo">
			<video width="100%" height="100%" autoplay muted loop playsinline preload="metadata">
				<source src="/wp-content/themes/canvas/video/header-bg-v2.webm" type="video/webm">
				<source src="/wp-content/themes/canvas/video/header-bg-v2.mp4" type="video/mp4">
				<source src="/wp-content/themes/canvas/video/header-bg-v2.ogv" type="video/ogg">
			</video>
		</div>
		<section class="not-found">
			<div class="container">
				<h1 class="page-title"><?php esc_html_e( 'Oops! Looks like you&rsquo;ve gotten off track.', 'clientcanvas' ); ?></h1>
				<p>Schedule an appointment today or check out our homepage.</p>
				<a class="btn" href="/free-consult">Schedule a Free Consultation</a>
				<a class="btn" href="/">Go Home</a>
			</div>
		</section><!-- .error-404 -->

	</main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>