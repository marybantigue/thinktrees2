<?php
/*
 * Template Name: About Template
 * Description: About Page template
 */

get_header(); ?>
<div class="banner-common" style="background-image: url( <?php header_image(); ?>); min-height: 250px;">
  
</div>
	<!-- site-content -->
	<div class="site-content clearfix">

		<!-- main-column -->
		<div class="main-column">
			<div class="container">
				<div class="row testimonials-area">
				
					<?php 

					// args
					$args = array(
						'numberposts'	=> -1,
						'post_type'		=> 'testimonial'
					);


					// query
					$the_query = new WP_Query( $args );

					?>
					<?php if( $the_query->have_posts() ): ?>
						<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
							

							<div class="media">
							  <div class="media-left">
							      <img class="media-object" src="<?php the_field('photo'); ?>" alt="...">
							    
							  </div>
							  <div class="media-body">
							    <h4 class="media-heading"><?php the_field('name'); ?></h4>
							    <p><?php the_field('testimonial'); ?></p>
							    <a href="<?php the_field('company_website'); ?>">
							    	<?php the_field('company'); ?>
							    </a>
							  </div>
							</div>

						<?php endwhile; ?>
					<?php endif; ?>

					<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>
				</div>
			</div>
		</div><!-- /main-column -->


	</div><!-- /site-content -->

	<?php get_footer();

?>
