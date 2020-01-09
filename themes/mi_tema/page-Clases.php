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




<section class="courses ">

  <div class="container">
    <h4>Taharoa te Invita</h4>
    <div class="col-md-12 text-center courses__info ">
        <p>
          <li>Si te gusta Bailar y divertirte</li>
          <li>Si tocas guitarra y quieres compartir</li>
          <li>tocas percusion o ukelele </li>

          <li>Animate grupo Taharoa musica danza y rapa nui
             busca nuevos integrantes.</li></p>
          <li>escribenos y ven a disfrutar en un grato ambiente</li>
          <li>Estamos ubicadas en</li>
          <li>Centro cultural Anita Gonzalez</li>
          <li>Direccion Av Laguna sur 8708</li>
          <li>Pudahuel</li>
      </div>
      </div>
      <div class="container">
      <div class="row py-4 text-center">
      <div class="col-md-3 courses__galery">
        <img src="<?php echo get_theme_file_uri(); ?> /assets/images/clase2.jpg" alt="">
      </div>
      <div class="col-md-3 courses__galery">
        <img src="<?php echo get_theme_file_uri(); ?> /assets/images/clase2.jpg" alt="">
      </div>
      <div class="col-md-3 courses__galery">
          <img src="<?php echo get_theme_file_uri(); ?> /assets/images/clase3.jpg" alt="">
      </div>
      <div class="col-md-3 courses__galery">
          <img src="<?php echo get_theme_file_uri(); ?> /assets/images/clase2.jpg" alt="">
      </div>
    </div>
    </div>
  <div class="container py-4">
    <h2>¿Donde estamos ubicadas?</h2>
    <p class="text-center colorLetra py-2 ">Direccion Av Laguna sur 8708</p>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3328.6310868139894!2d-70.76169258531604!3d-33.45891668077154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662c3abee933cd7%3A0xb3f31fe50ab7ae75!2sAv.%20Laguna%20Sur%208708%2C%20Pudahuel%2C%20Regi%C3%B3n%20Metropolitana!5e0!3m2!1ses!2scl!4v1578204507007!5m2!1ses!2scl" width="100%" height="200" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
</section>











<section class="form">

<div class="form__contacto ">
  <?php get_template_part('_includes/contac', 'info') ?>
</div>

</section>




<?php get_footer() ?>
