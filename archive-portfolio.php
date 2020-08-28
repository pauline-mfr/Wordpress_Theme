<?php get_header(); ?>
<h1><?php post_type_archive_title(); ?></h1>
<article class="container py-3" id="portfolio">

<div class="row row-cols-1 row-cols-md-3 g-4 pt-5" data-masonry='{"percentPosition": true }'>
<?php if (have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
<div class="col">
<div class="card bg-black text-light border border-secondary">

	<div class="card-img px-0" id="portfolio-img"><a href="<?php the_permalink() ?>"><?php the_post_thumbnail('medium', ['class' => 'card-img img-fluid', 'alt' => '', 'style' => 'height: auto;']) ?></a></div>
  <div class="card-img-overlay">
		<p class="taxonomy"><?php the_terms( get_the_ID() , 'project-type' ); ?></p>
    <h4 class="card-title py-3 px-3 text-center" id="portfolio-title"><?php the_title() ?></h4>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
