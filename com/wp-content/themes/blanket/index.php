<?php
/**
 * Blanket
 * It means Blank Empty Template.
 *
 * One Loop to rule them all,
 * One Loop to find them,
 * One Loop to bring them all and in the darkness bind them.
 *
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Blanket
 * @since Blanket 1.0
 */

get_header();

	if (have_posts()) :

		// Start the loop.
		while ( have_posts() ) : the_post();

			if (is_front_page()) :

				get_template_part( 'content', 'front-page' );

			else :
				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'content', get_post_format() );

			endif;

		// End the loop.
		endwhile;

		// Previous/next page navigation.
		the_posts_pagination(array(
			'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
			'next_text'          => __( 'Next page', 'twentyfifteen' ),
			'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
		));

	// If no content, include the "No posts found" template.
	else :

		get_template_part( 'content', 'none' );

	endif;

get_footer(); ?>