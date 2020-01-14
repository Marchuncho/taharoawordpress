<?php get_header() ?>
<?php get_template_part('_includes/slider', 'principal') ?>


<?php $arg = array(
 'post_type'     => 'Information',
 'category_name'   => '',
 'posts_per_page' => -1

 );

 $get_arg = new WP_Query( $arg );

 while ( $get_arg->have_posts() ) {
 $get_arg->the_post();
 ?>
 <!-- Content -->
 <section class="courses ">

   <div class="container">
     <h4><?php the_title() ?></h4>
     <div class="col-md-12 text-center courses__info ">

           <li class="lista"><?php the_content() ?></li>

       </div>
       <?php } wp_reset_postdata(); ?>
       </div>

<section>


       <div class="container">
         <div class="row py-4 text-center">
<?php $arg = array(
 'post_type'     => 'galeriaclases',
 'category_name'   => '',
 'posts_per_page' => -1

 );

 $get_arg = new WP_Query( $arg );

 while ( $get_arg->have_posts() ) {
 $get_arg->the_post();
 ?>

    <div class="col-md-3 courses__galery py-2">
        <?php the_post_thumbnail() ?>
      </div>
<?php } wp_reset_postdata(); ?>
    </div>

    </div>
</section>

  <div class="container py-4">
    <h2>¿Donde estamos ubicadas?</h2>
    <p class="text-center colorLetra py-2 ">Direccion Av Laguna sur 8708</p>
    <?php if ( is_active_sidebar( 'maps-widget' ) ) { ?>
    <?php dynamic_sidebar( 'maps-widget' ); ?><?php }; ?>
    </div>
</section>
<section class="form">

<div class="form__contacto ">
  <?php get_template_part('_includes/contac', 'info') ?>
</div>

</section>




<?php get_footer() ?>
