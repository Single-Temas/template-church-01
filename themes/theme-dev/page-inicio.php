<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Theme Dev
 */

get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">

		<?php while (have_posts()):
			the_post(); ?>
			<!-- banner -->
			<?php echo get_template_part('template-parts/home/content', 'banner'); ?>
			<!-- end banner -->

			<!-- board -->
			<?php echo get_template_part('template-parts/home/content', 'board'); ?>
			<!-- end board -->

			<!-- ministries -->
			<?php echo get_template_part('template-parts/home/content', 'ministries'); ?>
			<!-- end ministries -->

			<!-- calendar -->
			<?php echo get_template_part('template-parts/home/content', 'calendar'); ?>
			<!-- end calendar -->

			<!-- informative -->
			<?php echo get_template_part('template-parts/home/content', 'informative'); ?>
			<!-- end informative -->
		<?php endwhile; ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
