<?php get_header() ?>

<main class="black-background front-page">
  this is front-page.php

  <?php while (have_posts()) : the_post(); ?>
    <div class="">


      <div class="">
        <!-- start content -->
        <?php the_content(); ?>
        <!-- end content -->
      </div>
    </div>
  <?php endwhile; ?>
</main>



<?php get_footer() ?>