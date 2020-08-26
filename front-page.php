<?php get_header(); ?>

<div class="mb-5 pb-5 papaya px-4 justify border-bottom border-light">
    <?php the_content(); ?>
</div>
<div class="container my-5 py-3 text-secondary" id="home-sidebar">


<?php dynamic_sidebar('home-sidebar'); ?></br>


</div>

<?php get_footer(); ?>
