<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package rootstrap
 */

get_header(); ?>

<div id="content" class="site-content container">
<?php do_action( 'rootstrap_page_before' ); ?>
	<div id="primary" class="content-area col-sm-12 <?php echo rootstrap_get_option( 'site_layout', 'no entry' ); ?>">
		<?php do_action( 'rootstrap_page_start' ); ?>
		<div id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>
		<?php do_action( 'rootstrap_page_end' ); ?>
		</div><!-- #main -->
	</div><!-- #primary -->
<?php do_action( 'rootstrap_page_after' ); ?>
<?php get_footer(); ?>
