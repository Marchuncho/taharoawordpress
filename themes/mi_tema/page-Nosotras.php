<?php get_header() ?>
<header>
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active ">
      <img  src="<?php echo get_theme_file_uri(); ?> /assets/images/chicas3.jpg" class="d-block  " alt="...">
    </div>
    <div class="carousel-item ">
      <img  src="<?php echo get_theme_file_uri(); ?> /assets/images/baile.jpg" class="d-block " alt="...">
    </div>
    <div class="carousel-item ">
      <img  src="<?php echo get_theme_file_uri(); ?> /assets/images/chicas.jpg" class="d-block  " alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Siguiente</span>
  </a>
</div>
</header>


<?php $arg = array(
 'post_type'     => 'historia',
 'category_name'   => '',
 'posts_per_page' => -1

 );

 $get_arg = new WP_Query( $arg );

 while ( $get_arg->have_posts() ) {
 $get_arg->the_post();
 ?>

 <!-- Content -->
 <section class="history">
   <div class="history__group container">
     <h5><?php the_title() ?></h5>
     <div class="row">
       <div class="col-md-12">
         <p><?php the_content() ?></p>
       </div>


     </div>
      <?php } wp_reset_postdata(); ?>
   </div>

</section>
<section class="form">

<div class="form__contacto ">
  <?php get_template_part('_includes/contac', 'info') ?>
</div>

</section>


<?php get_footer() ?>
