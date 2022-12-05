<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nk
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container mt-3 page-auto">
		<header class="entry-header page-auto__title text-center">
			<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
		</header><!-- .entry-header -->

		<?php nk_post_thumbnail(); ?>

		<div class="entry-content page-auto__text">
			<?php
			the_content();

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__('Pages:', 'nk'),
					'after'  => '</div>',
				)
			);
			?>
		</div><!-- .entry-content -->
	</div>



</article><!-- #post-<?php the_ID(); ?> -->