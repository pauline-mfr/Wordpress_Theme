<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <?php wp_head(); ?>
    <style>
    #header-img {height: 500px; position: relative; z-index: 1; background-image: url("<?php header_image(); ?>"); background-position: center; background-repeat: no-repeat; background-size: cover;}

    </style>
  </head>
  <body class="container-fluid bg-black px-0" <?php body_class(); ?>>

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

      <header class="container-fluid px-0">
        <div class="row">
        <div class="col-2">
          <p class="text-danger"></p>
        </div>
        <div class="col-2  offset-8">
          <img src="search.png" alt="">
          <p><?php get_search_form(); ?></p>
        </div>
  </div>
  <div class="text-center text-light" >
      <h1 id="header-title"><?php bloginfo('title');?></h1>
  </div>

  <div class="container-fluid bg-black px-0 mt-5" id="header-img"></div>


  <div class="text-light" id="header-subtitle">
    <div class="circle-one"></div>
    <div class="circle-two"></div>
      <h3 class="text-right"><?php bloginfo('description');?></h3>
      <p class="justify">
      	<?php dynamic_sidebar('blog-sidebar'); ?><br>
    </p>
      </div>
      </header>
