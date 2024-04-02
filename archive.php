<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sol_Ballesi
 */

get_header();

if ( have_posts() ) {
	the_archive_title( '<h1 class="page-title">', '</h1>' );
	the_archive_description( '<div class="archive-description">', '</div>' );

	while ( have_posts() ) {
		the_post();

		sol_ballesi_print_post();
	}

	the_posts_navigation();
}

get_sidebar();
get_footer();
