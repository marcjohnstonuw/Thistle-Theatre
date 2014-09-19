<?php
/**
 * Template Name: Productions
 *
 * This is the template that displays full width page without sidebar
 *
 * @package rootstrap
 */

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<div id="content" class="site-content container">
	<div id="primary" class="content-area">
		<main id="production-details" class="site-productions" role="main">
			<div class="production-details clearfix">
				<div class="col-md-3 thumbnail">
					<?php echo the_post_thumbnail( null, 'full', null ); ?>
				</div>
				<div class="col-md-9">
					<h1><?php echo $post->post_title; ?></h1>
					<h2 class="author">By: <?php echo get_post_meta(get_the_ID(), "author", true); ?></h2>
					<p class="by-line">
						Director: <?php echo get_post_meta(get_the_ID(), "director", true); ?><br />
						Producer: <?php echo get_post_meta(get_the_ID(), "producer", true); ?><br />
						Production Dates: <?php echo get_post_meta(get_the_ID(), "dates", true); ?>
					</p>
					<p class="production-dates">
				</div>
				<div class="col-md-12">
					<p class="description"><?php echo $post->post_content; ?></p>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
