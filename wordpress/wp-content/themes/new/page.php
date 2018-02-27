<?php
/*
 * The template for displaying all pages.
 */

get_header(); ?>
  <section class="container--small page" role="main">
  	<?php while ( have_posts() ) : the_post(); ?>
      <div class="page__content">
        <?php the_content(); ?>
      </div>
    <?php endwhile;?>
  </section>
<?php get_footer(); ?>
