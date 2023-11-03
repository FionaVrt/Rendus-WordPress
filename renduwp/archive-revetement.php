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

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
			<section class="archive-conteur-revetement">
				
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post(); ?>

			<article class="card_revetement">
                    <?php the_post_thumbnail() ?>
                    <div class="card_revetement">
                        <h2><?php the_title(); ?></h2>
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>">En savoir plus</a>
                    </div>
                </article>
				

			<?php endwhile; ?>
			</section>
			<?php
			

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php

get_footer();
