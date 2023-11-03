<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package renduwp
 */

get_header();
?>

<main id="primary" class="site-main">

    <?php if (have_posts()) : ?>

        <header class="page-header">
            <?php
            the_archive_title('<h1 class="page-title">', '</h1>');
            the_archive_description('<div class="archive-description">', '</div>');
            ?>
        </header><!-- .page-header -->

        <section class="archive_bois-container">

            <?php
            /* Start the Loop */
            while (have_posts()) :
                the_post();
                ?>
                <div class="bois-card">
                    <?php the_post_thumbnail(); ?>
                    <h2><?php the_title(); ?></h2>
                    <a href="<?php the_permalink(); ?>">En savoir plus sur cet raquette</a>
                </div>
            <?php endwhile; ?>
        </section>

        <?php the_posts_navigation(); ?>

    <?php else :

        get_template_part('template-parts/content', 'none');

    endif;
    ?>

</main><!-- #main -->

<?php

get_footer();
