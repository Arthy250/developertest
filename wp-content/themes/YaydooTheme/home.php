<?php get_header() ?>

<main class="container-fluid slider">
  <div class="text-center">
    <ul class="bxslider">
    <?php 
      $args = array (
        'post_type' => 'slider_imagenes',
        'posts_per_page' => 3,
        'orderby' => 'date',
        'order' => 'DESC'
      );
      $imagenes = new WP_Query($args);
      while ($imagenes -> have_posts()): $imagenes -> the_post(); ?>
    <li class="slide">
      <?php $imagen = get_field('imagen');?>
      <img src="<?php echo $imagen ?>" alt="<?php echo the_title(); ?>">
    </li>

    <?php endwhile; wp_reset_postdata(); ?>

    </ul>
  </div>

  <section class="seccion text-center">
    <h2>Artículos</h2>
    <ul class="listado-blog">
      <?php get_template_part('/assets/templates/loop', 'articulos') ?>
    </ul>
  </section>
</main>

<?php get_footer() ?>