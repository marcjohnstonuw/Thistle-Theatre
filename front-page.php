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
						<img src="<?php bloginfo('template_url'); ?>/images/having-hope-01.jpg" alt="...">
						<div class="carousel-caption">
						Having Hope at Home</br>
						by David S. Craig</br>
						Directed by Sue Garner</br>
						Produced by Julie McIntosh</br>
						 ov. 14-22. Stay tuned for ticket information
						</div>
					</div>
					<div class="item">
						<img src="<?php bloginfo('template_url'); ?>/images/fake-crew.jpg" alt="...">
						<div class="carousel-caption">
						Interested in joining our crew?</br>
						contact us at info@thistletheatre.com
						</div>
					</div>
					<div class="item">
						<img src="<?php bloginfo('template_url'); ?>/images/generic.jpg" alt="...">
						<div class="carousel-caption">
						Here's another generic image</br>
						Most sliders have 3+ things!
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

		</div><!-- #main -->
	</div><!-- #primary -->
	</div>

		<?php do_action( 'rootstrap_post_after' ); ?>
		<?php get_sidebar( 'home' ); ?>

<?php 
	get_footer(); 
}
?>