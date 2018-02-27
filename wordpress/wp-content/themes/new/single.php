<?php
/*
 * Single post template
 */

get_header(); ?>


<section class="single" role="main">

  <!-- gets category of post -->
  <?php $category = get_the_category($thispost);
      $catname = $category[0]->cat_name;
  ?>

	<?php while ( have_posts() ) : the_post(); ?>

        <!-- gets cover photo -->
        <?php $post_meta = get_post_meta($post->ID, '_to_cover_photo', true); ?>
        <?php if ( ! empty ( $post_meta ) ) {
          $attachment = wp_get_attachment_image_src( get_post_meta( get_the_ID(), '_to_cover_photo_id', 1 ), 'cover-photo');
          echo '<div class="single__cover-photo container">
                  <img src="' . $attachment['0'] . '">
                  </div>
                  <article class="single__article">
                  <header class="single__header">
                  <h1 class="single__title">' . get_the_title() . '</h1>';

        } else {
          // no cover photo: just display the title.
          echo '<article class="single__article">
            <header class="single__header">
              <h1 class="single__title">' . get_the_title() . '</h1>';
        } ?>

            <!-- grab author & date info -->
            <h2 class="single__subtitle">
              By <span class="single__author"><?php the_author_posts_link(); ?></span> | <?php echo get_the_date(); ?>
            </h2>
          </header>

          <!-- pastes content of article -->
          <div class="single__content">
            <div class="hr"></div>

            <?php the_content(); ?>

            <div class="hr"></div>

          </div>

          <footer class="single__meta">
            <div class="single__tags">
              <?php the_tags('Tags: ', ' | '); ?>
            </div>
            <div class="single__more">
              More by <?php the_author_posts_link(); ?>
            </div>
          </footer>
        </article>

	<?php endwhile;?>
</section>

<?php get_footer(); ?>

<!-- highlight the current category in the nav menu -->
<script>
  var catname = "<?php echo $catname ?>"
  var menu = document.getElementById("menu-primary").children;
  for (var li of menu){
    var text = li.firstChild.innerHTML;
    if (text == catname)
      li.className += " active";
  }
</script>
