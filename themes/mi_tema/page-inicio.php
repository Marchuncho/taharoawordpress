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
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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

         <div class="col-md-4 PhotographyGalery__presentaciones py-2 ">

           <?php the_post_thumbnail();?>
           <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal-<?php the_ID();?>">
             Launch demo modal
           </button>
         </div>
         <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="Modal-<?php the_ID();?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title-<?php the_ID();?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
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

          <div class="col-md-6">
            <div class="cursos__contents">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
            </div>
          </div>

      </div>
    </div>
</section>

<section class="form">

<div class="form__contacto ">
  <h6>¿Quieres Aprender? Escribenos y disfruta</h6>
  <a href="contacto"> <button class="button1 " type="button" name="button">  Contactanos</button></a>
</div>

</section>
</main>

<?php get_footer() ?>
