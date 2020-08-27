<?php get_header(); ?>
<h1><?php post_type_archive_title(); ?></h1>

 <article class="container">
   <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
 <div class="card mb-3 text-light bg-black border border-light">
   <h4 class="card-title"><?php the_title(); ?></h4>
   <?php the_post_thumbnail('medium', ['class' => 'card-img-top img-fluid', 'alt' => '', 'style' => 'height: auto;']) ?>
<div class="card-body ">
   <h4 class="card-title"><?php the_title(); ?></h4>

   <div>
     <p class="card-text">
       <?php the_content(); ?>
     </p>
   </div>
 </div>
 <?php endwhile; endif; ?>
 </article>

<?php get_footer(); //MODIFIER CLASSES
 ?>
