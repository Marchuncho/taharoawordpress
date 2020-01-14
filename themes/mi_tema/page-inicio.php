<?php get_header() ?>

<?php get_template_part('_includes/slider', 'principal') ?>
<main>
<article class="About">
  <div class="container">
    <h1 class="scale-in-left">TAHAROA   Nuestra Historia</h1>
        <p>Taharoa, es un grupo que se crea el año 1999, con la finalidad de dar a conocer la música y danza de la cultura Chilena “Rapanui”, de la Isla de Pascua, perteneciente a la a la V Región de Valparaíso, como una agrupación folclórica con el objetivo de desarrollar muestras de la cultura, trajes, baile, música, costumbres e historia, en la Región de Santiago, como muestra de la danza tradicional folclórica chilena, así dar a conocer y proteger la cultura Rapanui...</p>
  </div>

  <div class="About__button container">
  <a class="button2" href="<?php echo get_the_permalink( $post = 8, $leavename = false );?>"> Ir a nuestra historia</a>

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
       <p <?php the_content() ?></p>
     </div>
     <div class="card-footer text-center">
         <a class="button3" href="<?php echo get_the_permalink( $post = 10, $leavename = false );?>">Visita mi perfil </a>
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


      <?php $arg = array(
        'post_type'     => 'Aprender',
        'category_name'   => '',
        'posts_per_page' => -1
      );

        $get_arg = new WP_Query( $arg );

        while ( $get_arg->have_posts() ) {
          $get_arg->the_post();
          ?>

          <section class="cursos text-center py-5">

            <div class="container my-3">
                    <h4><?php the_title() ?></h4>
              <div class="row">

          <div class="col-md-6 cursos__imgs ">
            <?php the_post_thumbnail() ?>
          </div>

          <div class="col-md-6 ">
            <div class="cursos__contents ">
              <p><?php the_content() ?> </p>
            </div>
          </div>
            <?php } wp_reset_postdata(); ?>
        </div>

        <div class="cursos__button pt-5">
          <a  class="buttonclases" href="<?php echo get_the_permalink( $post = 12, $leavename = false );?>">Nuestras clases</a>
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
