<?php get_header(); ?>
<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

 <article class="container">
 <div class="card mb-3 text-light bg-black border border-light">
   <?php the_post_thumbnail('medium', ['class' => 'card-img-top img-fluid', 'alt' => '', 'style' => 'height: auto;']) ?>
<div class="card-body ">
   <h4 class="card-title"><?php the_title(); ?></h4>

   <div>
     <p><small class="text-muted">
       <?php the_date(); ?> - <?php the_author(); ?>
       <?php the_category(); ?></small>
     </p>
   </div>

   <div>
     <p class="card-text">
       <?php the_content(); ?>
     </p>
   </div>
   <?php comments_template();?>
 </div>
 </article>

<?php endwhile; endif; ?>

<div class="container pages-nav py-5 ">
  <div class="row">
	<div class="col-6 previous">
		<?php previous_post_link( 'Previous post<br>%link' ); ?>
    </div>
    <div class="col-6 next">
        <?php next_post_link( 'Next post<br>%link' ); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
