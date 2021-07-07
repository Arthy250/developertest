<?php get_header() ?>

<?php while( have_posts() ): the_post(); ?>
  
  <div class="contenedor py-3 text-center">
  
  <h2>Artículo -  <?php the_title( ) ?> </h2>
  
  <?php if ( has_post_thumbnail() ) : ?>
    <?php 
      $args = array(
        'class' => 'imagen-articulo',
        'title' => 'Imagen'
      );
      the_post_thumbnail('full', $args);?>
  <?php endif; ?> 

  <p> <?php the_content(  ) ?> </p>
  </div>

<?php endwhile; ?>