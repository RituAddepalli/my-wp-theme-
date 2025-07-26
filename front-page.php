<?php get_header(); ?>
<main>
  <h2>Welcome to My Blog</h2>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article>
      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <?php the_post_thumbnail('medium'); ?>
      <p><?php the_excerpt(); ?></p>
    </article>
  <?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>
