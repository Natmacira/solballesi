<?php
/**
 * The template for displaying the blog.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Empty_Base
 */

get_header();
?>

<h1 class="page-title"><?php single_post_title(); ?></h1>

<section id="posts">
<?php

while ( have_posts() ) {
	the_post();

	empty_base_print_post();

}

the_posts_navigation();

?>
</section>

<?php

get_sidebar();
get_footer();
