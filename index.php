<?php get_header(); ?>

<main>
  <h1>Welcome to My Custom Blog 🌟</h1>
  <p>This is a simple test to see if our theme is working correctly.</p>

  <section>
    <h2>Latest Posts</h2>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article>
        <h3><?php the_title(); ?></h3>
        <p><?php the_excerpt(); ?></p>
        <a href="<?php the_permalink(); ?>">Read more</a>
      </article>
    <?php endwhile; else : ?>
      <p>No posts found.</p>
    <?php endif; ?>
  </section>
</main>

<?php get_footer(); ?>
