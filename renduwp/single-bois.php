<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package renduwp
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post(); ?>

			<section class="single_bois-container">

                <div class="bois-card">
                    <?php the_post_thumbnail(); ?>
                    <h2><?php the_title(); ?></h2>
					<?php the_content();?>
                </div>
        </section>

			<?php 

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php

get_footer();
