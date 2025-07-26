<?php get_header(); ?>
<main>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article>
      <h1><?php the_title(); ?></h1>
      <p><small>By <?php the_author(); ?> on <?php the_time('F j, Y'); ?></small></p>
      <?php the_post_thumbnail('large'); ?>
      <div><?php the_content(); ?></div>
    </article>
  <?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>
