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

<section class="Instructora  ">
  <h2>Nuestras Instructoras</h2>
<div class=" container">
  <div class="card-deck pt-3 pb-3 Instructora__sizeCard ">
    <div class="row">
    <?php $arg = array(
     'post_type'     => 'post',
     'category_name'   => '',
     'posts_per_page' => -1,
     'orderby' => 'rand'


     );

     $get_arg = new WP_Query( $arg );

     while ( $get_arg->have_posts() ) {
     $get_arg->the_post();
     ?>

     <!-- Content -->

       <div class="card ">
     <?php the_post_thumbnail();?>

     <div class="card-body">
       <h5 class="card-title text-center"><?php the_title() ?></h5>
       <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
     </div>s
     <div class="card-footer text-center">
         <a href="Instructora"><button class="button3" type="button" name="button">Visita mi perfil</button> </a>
     </div>
     </div>



     <?php } wp_reset_postdata(); ?>
 </div>
</div>



</div>
</section>
<section class="form py-4">

<div class="form__contacto ">
  <?php get_template_part('_includes/contac', 'info') ?>
</div>

</section>
<?php get_footer() ?>
