<?php get_header(); ?>

<section id="first-section">
<div class="circle-one"></div>
<div class="circle-two"></div>
</section>

<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

    <h1><?php the_title(); ?></h1>

    <?php the_content(); ?>

<?php endwhile; endif; ?>



<?php get_footer(); ?>
