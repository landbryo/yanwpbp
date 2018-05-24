<?php get_header(); ?>
<div class="container">
  <?php if (have_posts()) { ?>
    <?php
    // start the loop
    while (have_posts()) {
      the_post();
      echo '<h1 class="title">';
      echo the_title();
      echo '</h1>';
    	the_content();
    }// end while
    ?>
  <?php } // endif; ?>
</div>
<?php get_footer(); ?>