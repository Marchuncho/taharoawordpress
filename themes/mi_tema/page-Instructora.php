<?php get_header() ?>
<?php get_template_part('_includes/slider', 'principal') ?>

<section class="instructoras">
<div class=" container py-5">
  <div class="row">

    <?php $arg = array(
     'post_type'     => 'Perfil',
     'category_name'   => '',
     'posts_per_page' => -1,
     'orderby' => 'rand'
     );
     $get_arg = new WP_Query( $arg );
     while ( $get_arg->have_posts() ) {
     $get_arg->the_post();
     ?>
    <!-- Content -->
    <div class="card-deck">
     <div class="card ">
       <?php the_post_thumbnail() ?>
       <div class="card-body text-center">
         <a class="button_perfilModal" href="<?php the_ID()?>" data-toggle="modal" data-target="#<?php the_ID()?>"> <?php the_title() ?> </a>
       </div>
     </div>
    </div>

    <div class="modal fade" id="<?php the_ID()?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <p><?php the_content(the_ID()) ?></p>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>
    </div>
    </div>
    </div>
      <?php } wp_reset_postdata();?>
      </div>
    </div>
    </section>
<section class="form">

<div class="form__contacto ">
  <?php get_template_part('_includes/contac', 'info') ?>
</div>

</section>
<?php get_footer() ?>
