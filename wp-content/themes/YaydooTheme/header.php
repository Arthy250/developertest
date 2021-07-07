<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
  <title>Yaydoo theme</title>
</head>
<body <?php body_class(); ?>>
  
  <header class="site-header">
    <div class="contenedor">
      <div class="barra-navegacion d-md-flex justify-content-md-between">
        <div class="logo">
          <a href="<?php echo esc_url(site_url('/')); ?>">
            <?php $ruta = get_template_directory_uri() ?>
            <img src="<?php echo $ruta; ?>/assets/img/logo.png" alt="logo">
          </a>
        </div>

        <?php 
          $args = array(
            'theme_location' => 'menu-principal',
            'container' => 'nav',
            'container_class' => 'menu-principal'
          );
          wp_nav_menu( $args );
        ?>
      </div>
    </div>
  </header>
  