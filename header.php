<!DOCTYPE html >
<html <?php language_attributes();?>>
<head>
  
  <meta <?php bloginfo('charset');?>>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/style.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/intlTelInput.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/search-button.css">
    


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    
    <?php wp_head()?>
</head>
<body <?php body_class(); ?>>
  <header>
    <div class="container">
      <div class="row">       

        <nav class="navbar navbar-expand-lg navbar-light  header-full">
          <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
           <a class="navbar-brand" href="#">

            <?php 
              $custom_logo_id = get_theme_mod( 'custom_logo' );
              $logo = wp_get_attachment_image_src($custom_logo_id, 'full');

              if( has_custom_logo() ){
                  echo '<img src="' . esc_url( $logo[0]) . '"class="img-fluid">';
              }else{
                echo '<h1>' . get_bloginfo('name') . '</h1>';
                echo '<p>' . get_bloginfo('description') . '</p>';
              }

            ?>
              
            </a>
            <?php
            wp_nav_menu( array(
              'theme_location'    => 'principal',
              'depth'             => 2,
              'container'         => 'div',
              'container_class'   => 'collapse navbar-collapse',
              'container_id'      => 'bs-example-navbar-collapse-1',
              'menu_class'        => 'nav navbar-nav custom-menu',
              'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
              'walker'            => new WP_Bootstrap_Navwalker(),
            ) );

            ?>
             
          </div>
          <?php get_search_form();  ?>
        </nav>
        
        

      


      </div>
    </div>
  </header>

