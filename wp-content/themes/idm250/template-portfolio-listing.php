<?php
/* Template Name: Portfolio Listing */
?>

//this template can be used in the wp in the template section

<?php get_header(); ?>

<main>
  This is template-portfolio-listing.php

  <?php while (have_posts()) : the_post(); ?>
    <div class="">
      <h1 class=""><?php the_title(); ?>
      </h1>

      <div class="">
        <!-- start content -->
        <?php the_content(); ?>
        <!-- end content -->
      </div>
    </div>
  <?php endwhile; ?>
</main>


<?php get_footer();
