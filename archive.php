<?php get_header(); ?>

<!-- <section class="" id="sidebar-blog">
	<ul>
	<?php //dynamic_sidebar('blog-sidebar'); ?>
</ul>
</section> -->

<article class="container py-3">


<div class="row row-cols-1 row-cols-md-3 g-4 pt-5">
<?php if (have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
<div class="col">
<div class="card h-100 bg-black text-light border border-light py-3 px-3">
	<h4 class="card-title bg-secondary pb-3"><?php the_title() ?></h4>
	<div class="card-img-top"><?php the_post_thumbnail('medium', ['class' => 'card-img-top img-fluid', 'alt' => '', 'style' => 'height: auto;']) ?></div>
<div class="card-body">

<p class="card-text">
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
<h2>pas d'article</h2>
<?php endif; ?>
</div>
</article>




	<div class="pages-nav d-flex justify-content-center py-5">
<?php the_posts_pagination(); ?>
</div>


<?php get_footer(); ?>
