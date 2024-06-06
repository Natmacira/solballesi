<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Sol Ballesi
 */

get_header();

if (has_post_thumbnail()) {
    the_post_thumbnail('large'); // Muestra la imagen destacada
}
the_content();
?>

<section class="home-blog">
    <?php

    $all_posts_query = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => 3
    ));

    if ($all_posts_query->have_posts()) {
    ?>
        <h4>Blog</h4>
        <article class="post-container-blog">
            <?php
            while ($all_posts_query->have_posts()) {
                $all_posts_query->the_post(); 
            ?>
                <div class="post-item">
                    <?php
                    if (has_post_thumbnail()) {
                        the_post_thumbnail('large'); 
                    }
                    ?>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2> 
                </div>
            <?php
            }
            ?>

        </article>
    <?php

        wp_reset_postdata();
    }
    ?>
    <a href="https://www.solballesi.com//blog" class="ver-mas">Ver más ></a>

</section>
<?php

get_footer();
