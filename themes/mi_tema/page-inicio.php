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
<main>
<article class="About">
  <div class="container">
    <h1 class="scale-in-left">TAHAROA   Nuestra Historia</h1>
        <p>Taharoa, es un grupo que se crea el año 1999, con la finalidad de dar a conocer la música y danza de la cultura Chilena “Rapanui”, de la Isla de Pascua, perteneciente a la a la V Región de Valparaíso, como una agrupación folclórica con el objetivo de desarrollar muestras de la cultura, trajes, baile, música, costumbres e historia, en la Región de Santiago, como muestra de la danza tradicional folclórica chilena, así dar a conocer y proteger la cultura Rapanui...</p>
  </div>

  <div class="About__button container">
  <a href="Nosotras"> <button class="button2"  type="button " name="button">Ir a nuestra historia</button></a>
  </div>
</article>

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

<section class="PhotographyGalery">
  <div class="container py-5">
    <h3>GALERIA FOTOGRAFICA</h3>
    <div class="row py-3">

        <?php $arg = array(
         'post_type'     => 'galeria',
         'category_name'   => '',
         'posts_per_page' => -1,
         'offset'     => 0,
         'orderby' => 'rand'
         );

         $get_arg = new WP_Query( $arg );

         while ( $get_arg->have_posts() ) {
         $get_arg->the_post();
         ?>

         <!-- Content -->

         <div class="col-md-4 PhotographyGalery__presentaciones py-2">

           <?php the_post_thumbnail();?>

         </div>

         <?php } wp_reset_postdata(); ?>
    </div>
    </div>
</section>

<section class="cursos text-center py-5">
  <h4>Nuestras clases</h4>

    <div class="container my-5">
      <div class="row">

          <div class="col-md-6 cursos__imgs">
              <img src="<?php echo get_theme_file_uri(); ?> /assets/images/ensayo.jpg" alt="" class="img-fluid">
          </div>

          <div class="col-md-6 py-3">
            <div class="cursos__contents ">
                  <p>Si te gusta Bailar y divertirte
                    Si tocas guitarra y quieres compartir
                    tocas percusion o ukelele
                    Animate grupo Taharoa musica danza y rapa nui busca nuevos integrantes. </p>
            </div>
          </div>
      </div>
      <div class="cursos__button pt-5">
    <a href="Clases">  <button class="buttonclases" type="button" name="button">Nuestras clases</button></a>
      </div>
    </div>
</section>

<section class="form py-4">

<div class="form__contacto ">
  <?php get_template_part('_includes/contac', 'info') ?>
</div>

</section>
</main>

<?php get_footer() ?>
