<?php get_header(); ?>

<section class="" id="sidebar">
	<ul>
	<?php dynamic_sidebar('blog-sidebar'); ?>
</ul>
</section>

<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
<article class="container">
		<div class="card-group bg-black text-light mx-auto py-5">
			<span class="card-img-top"><?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid', 'alt' => '']); ?></span>
			<div class="card-body">
			<h4 class="card-title"><?php the_title(); ?></h4>

            <p class="card-text">
								<?php the_excerpt(); ?>
								<small class="text-muted">
                <?php the_time( get_option( 'date_format' ) ); ?>
                - <?php the_author(); ?> • <?php comments_number(); ?>
            </small></p>

						<a href="<?php the_permalink(); ?>" class="btn btn-secondary">Read more</a>
          </div>
				</div>
		</article>
	<?php endwhile; endif;?>
	<div class="pages-nav d-flex justify-content-center py-5">
<?php the_posts_pagination(); ?>
</div>


<?php get_footer(); ?>
