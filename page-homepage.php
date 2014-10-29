<?php
/**
 * Template Name: Homepage
 *
 * This is the template that displays full width page without sidebar
 *
 * @package rootstrap
 */

get_header(); ?>
<div id="content" class="site-content container">
	<div id="primary" class="content-area col-sm-12 col-md-12">
		<main id="main" class="site-main" role="main">
			<div id="carousel-home" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#carousel-home" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-home" data-slide-to="1"></li>
					<li data-target="#carousel-home" data-slide-to="2"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner">
					<div class="item active">
						<?php echo the_post_thumbnail( null, 'full', null ); ?>
						<div class="carousel-caption">
						Hi Mom
						</div>
					</div>
					<div class="item active">
						<?php kd_mfi_the_featured_image( 'page-featured-image-2', 'page', 'full' ); ?>
						<div class="carousel-caption">
						Hi Mom
						</div>
					</div>
					<div class="item active">
						<?php kd_mfi_the_featured_image( 'page-featured-image-3', 'page', 'full' ); ?>
						<div class="carousel-caption">
						Hi Mom
						</div>
					</div>
				</div>

				<!-- Controls -->
				<a class="left carousel-control" href="#carousel-home" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
				</a>
				<a class="right carousel-control" href="#carousel-home" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
				</a>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
