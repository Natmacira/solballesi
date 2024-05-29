<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Sol Ballesi
 */
get_header();

$all_posts_query = new WP_Query(array(
    'post_type' => 'post',
    'posts_per_page' => -1
));

if ($all_posts_query->have_posts()) {
?>
    <h1>Blog</h1>
    <section class="post-container-blog">
        <?php
        while ($all_posts_query->have_posts()) {
            $all_posts_query->the_post(); // Establece los datos de la entrada actual
        ?>
            <div class="post-item">
                <?php
                if (has_post_thumbnail()) {
                    the_post_thumbnail('thumbnail'); // Muestra la imagen destacada
                }
                ?>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2> <!-- Muestra el título de la entrada con un enlace a la misma -->
            </div>
        <?php
        }
        ?>

    </section>
<?php

    wp_reset_postdata();
}

get_footer(); //
