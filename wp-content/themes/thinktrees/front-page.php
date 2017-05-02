<?php
get_header(); ?>


<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
  <!-- Overlay -->
  <div class="overlay"></div>
  <?php 

  // args
  $args = array(
    'numberposts' => -1,
    'post_type'   => 'slider'
  );


  // query
  $the_query = new WP_Query( $args );
  ?>

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <?php for($i = 0; $i < $the_query->post_count; $i++){?>
    <li data-target="#bs-carousel" data-slide-to="<?php echo $i ?>" <?php echo $i == 0 ? 'class="active"' : '' ?> ></li>
    <?php } ?>
  </ol>
  <?php if( $the_query->have_posts() ){ 

    $count = 1; ?>



  
  
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <div class="item slides <?php echo $count ==1 ? 'active' : '' ?>">
      <div class="slide-<?= $count++; ?>" style="background-image: url(<?php the_field('background_image')?>);"></div>
      <div class="hero">
          <h1><?php the_field('header');?></h1>
          <?php the_field('subtitle');?>
      </div>
    </div>
    <?php endwhile; ?>
  </div> 
  <?php } ?>
</div>

<section class="home-content clearfix">

        <div class="left-side news-wrap">

            <?php  if (is_active_sidebar('greenarea')) {
                     dynamic_sidebar('greenarea');
             } ?>
        </div>
        <div class="right-side">

        </div>
</section>
<section class="thinking-about-trees text-center">
    <div class="container">
        <?php  if (is_active_sidebar('middlewide')) {
                 dynamic_sidebar('middlewide');
         } ?>
        <div class="row">
            <div class="col-md-3">
                <?php  if (is_active_sidebar('middlecol1')) {
                         dynamic_sidebar('middlecol1');
                 } ?>
            </div>
            <div class="col-md-3">
                <?php  if (is_active_sidebar('middlecol2')) {
                       dynamic_sidebar('middlecol2');
                } ?>
            </div>
            <div class="col-md-3">
              <?php  if (is_active_sidebar('middlecol3')) {
                       dynamic_sidebar('middlecol3');
               } ?>
            </div>
            <div class="col-md-3">
              <?php  if (is_active_sidebar('middlecol4')) {
                       dynamic_sidebar('middlecol4');
               } ?>
            </div>
        </div>

    </div>

</section>
<section class="make-donation-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
              <?php  if (is_active_sidebar('orange1')) {
                       dynamic_sidebar('orange1');
               } ?>
            </div>
            <div class="col-md-3">
              <?php  if (is_active_sidebar('orange2')) {
                       dynamic_sidebar('orange2');
               } ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer();
