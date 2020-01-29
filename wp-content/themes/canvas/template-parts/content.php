<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package clientcanvas
 */

?>
<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );?>
<article id="post-<?php the_ID(); ?>" <?php post_class('fade-element'); ?> style="background-image: url('<?php echo $thumb['0'];?>');">
	<div class="post-wrap">
		<div class="entry-header">
			<span class="date"><?php the_date(); ?></span>
			<?php the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
			if ( 'post' === get_post_type() ) : ?>
			<?php endif; ?>
		</div>
		<div class="read-more">
			<h3>Read More</h3>
		</div>
	</div>
</article>
