<div class="contenedor site-footer">
  <hr>

  <div class="contenido-footer">
    <div class="logo">
      <?php $ruta = get_template_directory_uri() ?>
      <img src="<?php echo $ruta; ?>/assets/img/logo.png" alt="logo">
    </div>

    <p class="copyright">Todos los derechos reservados. <?php echo get_bloginfo('name') ." ". date('Y') ?></p>
  </div>
  
</div>
<?php wp_footer() ?>
</body>
</html>