<?php
/**
 * Main Template File
 *
 * This file is used to display a page when nothing more specific matches a query.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package themeHandle
 */

get_header(); ?>

<!-- <section class="archive" role="main"> -->


			<?php

      // <h1 class="single__title">' . single_cat_title('', false) . '</h1>


			function echo_category_image($imageslug) {
				echo '<div class="archive__cover-photo">
                <img src="' . get_stylesheet_directory_uri() . '/assets/images/' . $imageslug . '.jpg">
								<h1 class="archive__title">' . single_cat_title('', false) . '</h1>
							</div>';
			}

			if ( is_category() ) {
				if(is_category('news-features')) {
					echo_category_image('news');
				} else if(is_category('arts-culture')) {
					echo_category_image('arts');
				} else if(is_category('campus')) {
					echo_category_image('off-campus');
				} else if(is_category('off-campus')) {
					echo_category_image('off-campus');
				} else if(is_category('opinion')) {
					echo_category_image('opinion');
				} else if(is_category('poetry-prose')) {
					echo_category_image('poetry-prose');
				} else {
					echo '<h1 class="archive-title">';
						single_cat_title();
					echo '</h1>';
				}
			} else if ( is_tag() ) {
				echo '<h1 class="archive-title">';
					single_tag_title();
				echo '</h1>';
			} else if ( is_tax() ) {
				echo '<h1 class="archive-title">';
					single_term_title();
				echo '</h1>';
			} else if ( is_author() ) {
				echo '<h1 class="archive-title">';
					printf( __( 'Author: %s', 'themeTextDomain' ), '<span class="vcard">' . get_the_author() . '</span>' );
				echo '</h1>';
			} else if ( is_day() ) {
				echo '<h1 class="archive-title">';
					printf( __( 'Day: %s', 'themeTextDomain' ), '<span>' . get_the_date() . '</span>' );
				echo '</h1>';
			} else if ( is_month() ) {
				echo '<h1 class="archive-title">';
					printf( __( 'Month: %s', 'themeTextDomain' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'themeTextDomain' ) ) . '</span>' );
				echo '</h1>';
			} else if ( is_year() ) {
				echo '<h1 class="archive-title">';
					printf( __( 'Year: %s', '_s' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'themeTextDomain' ) ) . '</span>' );
				echo '</h1>';
			} else {
				echo '<h1 class="archive-title">';
					_e( 'Archives', 'themeTextDomain' );
				echo '</h1>';
			} ?>
<section class='archive__content' role="main">


	<?php if ( have_posts() ) :
		if(is_tag()) {
			echo '<div data-tag="' . get_query_var('tag') . '" class="stories__wrap">';
		} else if(is_category()) {
			echo '<div data-category="' . get_the_category()[0]->slug . '" class="stories__wrap">';
		} else {
			echo '<div class="stories__wrap">';
		}

		while ( have_posts() ) : the_post();
			$category = get_the_category();
			$catname = $category[0]->cat_name;

			echo_stories_article(simplify_name($catname), $catname);
			echo '<div class="hr"></div>';?>

		<?php endwhile; ?>
		<?php else : ?>

		<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>
	</div>
</section>
<?php get_footer(); ?>
