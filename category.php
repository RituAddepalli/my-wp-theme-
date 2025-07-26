<?php get_header(); ?>
<main>
  <h2>Category: <?php single_cat_title(); ?></h2>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article>
      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <p><?php the_excerpt(); ?></p>
    </article>
  <?php endwhile; endif; ?>
  <div><?php the_posts_pagination(); ?></div>
</main>
<?php get_footer(); ?>
