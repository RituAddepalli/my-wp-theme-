<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
  <script>
  document.addEventListener('DOMContentLoaded', function () {
    const toggleBtn = document.getElementById('toggle-mode');
    toggleBtn.addEventListener('click', function () {
      document.body.classList.toggle('dark');
    });
  });
</script>


</head>
<body <?php body_class(); ?>>
<header>
  <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
  <nav>
    <?php wp_nav_menu(['theme_location' => 'main-menu']); ?>
    <button id="toggle-mode">🌙</button>
  </nav>
</header>
