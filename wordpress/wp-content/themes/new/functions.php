<?php
/*
 * Functions and definitions
 */

function themeName_setup() {
  /*
   * Make theme available for translation.
   * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/twentyseventeen
   * If you're building a theme based on Twenty Seventeen, use a find and replace
   * to change 'twentyseventeen' to the name of your theme in all the template files.
   */
  load_theme_textdomain( 'new' );

  // This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary'    => __( 'Primary Nav Menu', 'new' ),
    'admin'      => __( 'Admin Nav Menu', 'new' )
	) );

  // Add featured image support
  add_theme_support( 'post-thumbnails' );

  add_image_size( 'cover-photo', 1920, 9999);

}
add_action( 'after_setup_theme', 'themeName_setup' );

/* CUSTOM META BOXES
 ========================== */

add_filter( 'cmb_meta_boxes', 'tuftobserver_metaboxes' );

function tuftobserver_metaboxes( array $meta_boxes ) {
  // Start with an underscore to hide fields from custom fields list
	$prefix = '_to_';

	/**
	 * Sample metabox to demonstrate each field type included
	 */

  //  $meta_boxes['dropcap'] = array(
  //    'id'          => 'Drop Cap',
  //    'title'       => __( 'Drop Cap Settings', 'cmb' ),
  //    'pages'       => array('post'),
  //    'context'     => 'normal',
  //    'priority'    => 'high',
  //    'show_names'  => true,
  //    'fields'      => array(
  //      array(
  //        'name'    => __( 'Disable Drop Cap?', 'cmb' ),
  //        'id'      => $prefix . 'drop_cap_disabled',
  //        'type'    => 'checkbox'
  //      ),
  //      array(
  //        'name'    => __( 'Preamble', 'cmb' ),
  //        'desc'    => __( 'Enter any text, such as a content warning, you want to appear before the drop cap at the start of your article.', 'cmb'),
  //        'id'      => $prefix . 'pre_drop_cap',
  //        'type'    => 'textarea_small'
  //      )
  //    )
  //  );

	$meta_boxes['coverphoto'] = array(
		'id'         => 'Cover Photo',
		'title'      => __( 'Add Cover Photo', 'cmb' ),
		'pages'      => array( 'post', ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		// 'cmb_styles' => true, // Enqueue the CMB stylesheet on the frontend
		'fields'     => array(
			array(
				'name'   => __( 'Cover Photo', 'cmb' ),
				'desc'   => __( 'Upload an image or enter a URL.', 'cmb' ),
				'id'     => $prefix . 'cover_photo',
				'type'   => 'file',
			)
		)
	);	// Add other metaboxes as needed

	return $meta_boxes;
}

add_action( 'init', 'cmb_initialize_to_meta_boxes', 9999 );
/**
 * Initialize the metabox class.
 */
function cmb_initialize_to_meta_boxes() {
	if ( ! class_exists( 'cmb_Meta_Box' ) )
		require_once 'inc/CMB/init.php';
}


function themeName_scripts() {
   wp_enqueue_style( 'themeTextDomain-style', get_stylesheet_uri() );
}
add_action('wp_enqueue_scripts', 'themeName_scripts');


function echo_stories_article($simplified_name, $name, $loaded=false) {
  $imgUrl = wp_get_attachment_image_src( get_post_thumbnail_id($post_id), 'medium-breakpoint' );
  $title = get_the_title();

  if(!empty($imgUrl['0'])) {
  	$thumbUrl = $imgUrl['0'];
  } else {
  	$thumbUrl = get_template_directory_uri() . '/assets/images/placeholder.png';
  }

  echo '<article class="stories__story">';

  // echo '<a href="' . get_the_permalink() . '" title="' . $title . '">' . $title . '</div>';

    echo '<div class="card__column-left">
            <a href="' . get_the_permalink() . '"><img src="' . $thumbUrl . '"></a>
          </div>
          <div class="card__column-right">
            <div class="card__category">' . $name . '</div>
            <h4 class="card__title"><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h4>
            <div class="card__date">By ';
    the_author_posts_link();
    echo ' | ' . get_the_date()  . '</div>

          </div>';

    // echo '<img src="' . $thumbUrl . '">';
    //
    // echo  '<h4>' . $name           . '</h4>
    //        <h4>' . get_the_title() . '</h4>
    //        <h4>' . get_the_author() . ' | ' . get_the_date()  . '</h4>
    // 		</a>
  	echo '</article>';
}
function simplify_name($name) {
	$name = preg_replace('/\s+/', '-', $name);
	$name = str_replace('&amp;', 'and', $name);
	$name = strtolower($name);

	return $name;
}
