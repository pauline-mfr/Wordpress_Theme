<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <?php wp_head(); ?>
    <style>

    </style>
  </head>
  <body class="container-fluid bg-black" <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <!--NAV-->
    <div class="collapse" id="navbarToggleExternalContent">
      <div class="bg-black ">
        <h5 class="text-secondary h4">Menu</h5>
        <span class="text-muted"><?php wp_nav_menu(array('theme_location' => 'main','menu_class' => 'header-menu')); ?></span>
      </div>
    </div>
    <nav class="navbar pb-0 navbar-dark bg-black">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>

      <!--HEADER-->

      <header class="container-fluid">
        <div class="row">
        <div class="col-2">
          <p class="text-danger">WIDGET SOCIAL MEDIA</p>
        </div>
        <div class="col-2  offset-8">
          <p><?php get_search_form(); ?></p>
        </div>
  </div>
  <div class="text-center text-light" >
      <h1 id="header-title"><?php bloginfo('title');?></h1>
  </div>

  <div class="container-fluid bg-black">
    <?php if ( get_header_image() ) : ?>

            <a class="d-flex justify-content-center img-fluid"  href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                <img id="header-img" src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
            </a>

    <?php endif; ?>
    <?php get_header_image() ?></div>


  <div class="text-light" id="header-subtitle">
    <div class="circle-one"></div>
    <div class="circle-two"></div>
      <h3 class="text-right"><?php bloginfo('description');?></h3>
      <p class="">
      	<?php dynamic_sidebar('blog-sidebar'); ?><br>
    </p>
      </div>
      </header>
