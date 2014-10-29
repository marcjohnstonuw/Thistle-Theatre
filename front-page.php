<?php
    
    if ( get_option( 'show_on_front' ) == 'posts' ) {
        get_template_part( 'index' );
    } elseif ( 'page' == get_option( 'show_on_front' ) ) {

get_header(); ?>
		
<?php rootstrap_featured_slider(); ?>
<?php rootstrap_call_for_action(); ?>

<div id="content" class="site-content container">
	<?php do_action( 'rootstrap_post_before' ); ?>
	<div id="primary" class="content-area col-sm-12 col-md-12">
		<div id="main" class="site-main" role="main">			
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
						<?php echo get_post_meta(get_the_ID(), "carousel-caption-1", true); ?>
						</div>
					</div>
					<div class="item">
						<?php kd_mfi_the_featured_image( 'featured-image-2', 'page', 'full' ); ?>
						<div class="carousel-caption">
						<?php echo get_post_meta(get_the_ID(), "carousel-caption-2", true); ?>
						</div>
					</div>
					<div class="item">
						<?php kd_mfi_the_featured_image( 'featured-image-3', 'page', 'full' ); ?>
						<div class="carousel-caption">
						<?php echo get_post_meta(get_the_ID(), "carousel-caption-3", true); ?>
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
			<p><a href="http://127.0.0.1:8000/wp-content/uploads/2014/09/single_membership_form.pdf">Download the membership form</a></p>
			<p><a href="http://www.ticketscene.ca/list.php?keywords=Having+Hope+at+home">Buy Tickets</a></p>
		</div><!-- #main -->
	</div><!-- #primary -->
	</div>

		<?php do_action( 'rootstrap_post_after' ); ?>
		<?php get_sidebar( 'home' ); ?>

<?php 
	get_footer(); 
}
?>