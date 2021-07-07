<?php while( have_posts() ): the_post(); ?>
  <li class="card gradient">

  <a href="<?php the_permalink(); ?>">
    <?php the_post_thumbnail();?>
  </a>

  <div class="contenido">
    <a href="<?php the_permalink(); ?>">
      <h3>Articulo - <?php the_title(); ?></h3>
    </a>
      <p class="meta">
        <span>Escrito por: </span> <b> <?php echo get_the_author_meta('display_name'); ?> </b>
      </p>
    </a>
  </div>
</li>
<?php endwhile; ?>