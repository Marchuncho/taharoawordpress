<?php get_header() ?>
<?php get_template_part('_includes/slider', 'principal') ?>


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
