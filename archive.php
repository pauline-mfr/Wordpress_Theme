<?php get_header(); ?>

<article class="container py-3">


<div class="row row-cols-1 row-cols-md-3 g-4 pt-5">
<?php if (have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
<div class="col">
<div class="card h-100 bg-black text-light border border-secondary py-3">
	<h4 class="card-title pb-3  px-3"><?php the_title() ?></h4>
	<div class="card-img-top px-0"><?php the_post_thumbnail('medium', ['class' => 'card-img-top img-fluid', 'alt' => '', 'style' => 'height: auto;']) ?></div>
<div class="card-body">

<p class="card-text justify">
<?php the_excerpt() ?>
</br>
<small class="text-muted">
                <?php the_time( get_option( 'date_format' ) ); ?>
                - <?php the_author(); ?> • <?php comments_number(); ?>
            </small></p>
						<a href="<?php the_permalink() ?>"class="btn btn-secondary">Read more</a>

</div>
</div>
</div>
<?php endwhile ?>
<?php else : ?>
<h2>nothing yet</h2>
<?php endif; ?>
</div>
</article>




	<div class="pages-nav d-flex justify-content-center py-5">
<?php the_posts_pagination(); ?>
</div>


<?php get_footer(); ?>
