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
  <a href="about.html" target="_blank"> <button class="button2"  type="button " name="button">Ir a nuestra historia</button></a>
  </div>
</article>

<section class="Instructora  ">
  <h2>Nuestras Instructoras</h2>
<div class=" container">
  <div class="card-deck pt-3 pb-3 Instructora__sizeCard ">
<div class="card ">
  <img src="<?php echo get_theme_file_uri(); ?> /assets/images/solecard2.jpg" class="card-img-top " alt="...">

  <div class="card-body">
    <h5 class="card-title text-center">Soledad</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
  </div>
  <div class="card-footer text-center">
      <a href="instructoras.html"><button class="button3" type="button" name="button">Visita mi perfil</button> </a>
  </div>
  </div>

<div class="card ">
  <img src="<?php echo get_theme_file_uri(); ?> /assets/images/katya.jpg" class="card-img-top" alt="...">

  <div class="card-body">
    <h5 class="card-title text-center">Katya</h5>
    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
  </div>
  <div class="card-footer text-center">
      <a href="instructoras.html"> <button class="button3" type="button" name="button">Visita mi perfil </button> </a>
  </div>
  </div>

<div class="card ">
  <img src="<?php echo get_theme_file_uri(); ?> /assets/images/vane.jpg" class="card-img-top rotate" alt="...">
  <div class="card-body">
    <h5 class="card-title text-center">Vanesa</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
  </div>
  <div class="card-footer text-center ">
    <a href="instructoras.html"><button class="button3" type="button" name="button">Visita mi perfil</button> </a>
  </div>
</div>
</div>
</div>
</section>

<section class="PhotographyGalery">
  <div class="container py-5">
    <h3>GALERIA FOTOGRAFICA</h3>
    <div class="row py-3">
      <div class="col-md-4 PhotographyGalery__presentaciones ">

        <img src="<?php echo get_theme_file_uri(); ?> /assets/images/pareja.jpg" alt="">
      </div>
      <div class="col-md-4 PhotographyGalery__presentaciones">

        <img src="<?php echo get_theme_file_uri(); ?> /assets/images/baile.jpg" alt="">
      </div>
      <div class="col-md-4 PhotographyGalery__presentaciones">

        <img src="<?php echo get_theme_file_uri(); ?> /assets/images/chicas.jpg" alt="">
      </div>
    </div>
    <div class="row py-3">
      <div class="col-md-4 PhotographyGalery__presentaciones">

        <img src="<?php echo get_theme_file_uri(); ?> /assets/images/chicas2.jpg" alt="">
      </div>
      <div class="col-md-4 PhotographyGalery__presentaciones">

        <img src="<?php echo get_theme_file_uri(); ?> /assets/images/chicas3.jpg" alt="">
      </div>
      <div class="col-md-4 PhotographyGalery__presentaciones">

        <img src="<?php echo get_theme_file_uri(); ?> /assets/images/baile.jpg" alt="">
      </div>
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
  <a href="Contacto.html"> <button class="button1 " type="button" name="button">  Contactanos</button></a>
</div>

</section>
</main>

<?php get_footer() ?>
