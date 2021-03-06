<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
    <title>Bienvenidos a mi web</title>
</head>
<body <?php body_class( )?>>

    <div class="cabecera">
    <nav class="navbar navbar-expand-md navbar-light">
      <a class="navbar-brand" href="home">Home</a>
        </button>
        <?php
            wp_nav_menu( array(
                'theme_location'    => 'infobasic_main_menu',
                'depth'             => 3,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker(),
            ) );
        ?>
        
    </nav>
    
    </div>