<div class="banner" style="background-image: url( 
<?php 
if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
	the_post_thumbnail_url();
} else {
	header_image();
}


?>

);">
	<div class="container">
	    <div class="banner-content text-center">
			<h1><?php echo esc_html( get_the_title() );?></h1>
		</div>
	</div>
</div>