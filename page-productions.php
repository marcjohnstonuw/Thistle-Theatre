<?php
/**
 * Template Name: Productions
 *
 * This is the template that displays full width page without sidebar
 *
 * @package rootstrap
 */
$args=array(
  'post_type' => 'production',
  'post_status' => 'publish',
  'posts_per_page' => -1,
  'caller_get_posts'=> 1
);
get_header(); ?>
<div id="content" class="site-content container">
	<div id="primary" class="content-area">
		<main id="productions" class="site-productions" role="main">
			<h1>Current Production</h1>
			<?php 
			$my_query = null;
			$my_query = new WP_Query($args);
			if( $my_query->have_posts() ) {
				$my_query->the_post(); 
			}
			?>
			<div class="production-overview row">
				<div class="col-md-3 thumbnail">
					<a href="<?php the_permalink() . $post->post_title?>">
						<?php echo the_post_thumbnail( null, 'full', null ); ?>
					</a>
				</div>
				<div class="col-md-9">
					<a href="<?php the_permalink() . $post->post_title?>">
						<h3><?php echo $post->post_title; ?></h3>
					</a>
					<h4 class="author">By: <?php echo get_post_meta(get_the_ID(), "author", true); ?></h4>
					<p class="description"><?php echo get_post_meta(get_the_ID(), "short_description", true); ?></p>
					<p class="by-line">
						Director: <?php echo get_post_meta(get_the_ID(), "director", true); ?><br />
						Producer: <?php echo get_post_meta(get_the_ID(), "producer", true); ?>
					</p>
					<p class="production-dates">Production Dates: <?php echo get_post_meta(get_the_ID(), "dates", true); ?></p>
					<br />
					<a class="buy-tickets" href="#"><div class="btn button-buy">Buy Tickets</div></a>
				</div>
			</div>
			<h1>Past Productions</h1>
			<?php 
			if( $my_query->have_posts() ) {
				while ($my_query->have_posts()) : $my_query->the_post(); 
			?>
			<div class="production-overview row">
				<div class="col-md-3 thumbnail">
					<a href="<?php the_permalink() . $post->post_title?>">
						<?php echo the_post_thumbnail( null, 'full', null ); ?>
					</a>
				</div>
				<div class="col-md-9">
					<a href="<?php the_permalink() . $post->post_title?>">
						<h3><?php echo $post->post_title; ?></h3>
					</a>
					<h4 class="author">By: <?php echo get_post_meta(get_the_ID(), "author", true); ?></h4>
					<p class="description"><?php echo $post->post_content; ?></p>
					<p class="by-line">
						Director: <?php echo get_post_meta(get_the_ID(), "director", true); ?><br />
						Producer: <?php echo get_post_meta(get_the_ID(), "producer", true); ?>
					</p>
					<p class="production-dates">Production Dates: <?php echo get_post_meta(get_the_ID(), "dates", true); ?></p>
				</div>
			</div>
			<?php
				endwhile;
			}
			?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
