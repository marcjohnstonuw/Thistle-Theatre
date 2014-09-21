<?php
/**
 * Template Name: Productions
 *
 * This is the template that displays full width page without sidebar
 *
 * @package rootstrap
 */
$args=array(
  'post_type' => 'news',
  'post_status' => 'publish',
  'posts_per_page' => -1,
  'caller_get_posts'=> 1
);
get_header(); ?>
<div id="content" class="site-content container">
	<div id="primary" class="content-area">
		<h1>News</h1>
		<main id="news-container" class="site-news" role="main">
			<?php 
			$my_query = null;
			$my_query = new WP_Query($args);
			if( $my_query->have_posts() ) {
				while ($my_query->have_posts()) : $my_query->the_post(); 
			?>
			<div class="news-item open row">
				<div class="col-lg-10 col-md-9 col-sm 8">
					<h3><?php echo $post->post_title; ?> <span class="expand">Click to Expand</span></h3>
				</div>
				<div class="col-lg-2 col-md-3 col-md-4">
					<span class="date pull-right"><?php echo get_post_meta(get_the_ID(), "date", true); ?></span>
				</div>
				<div class="col-lg-12 description">
					<p><?php echo $post->post_content; ?></p>
				</div>
			</div>
			<?php
				endwhile;
			}
			?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
