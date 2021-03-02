<?php

function string_limit($input, $length) {
  $result = '';
  $result = mb_strlen( $input ) > $length ? mb_substr($input, 0, $length) . '...' : $input;
  return $result;
}

function get_first_paragraph(){
  global $post;
  $str = wpautop( get_the_content() );
  $start = strpos($str, '<p>');
  $str = substr( $str, $start, strpos( $str, '</p>' ) + 4 );
  $str = strip_tags($str, '<a><strong><em>');
  return string_limit($str, 130);
}

function query_topics() {
  $args = array(
    'post_type'      => TOPICS_POST_TYPE,
    'post_status'    => 'publish',
    'posts_per_page' => 4,
    'order'          => 'DESC',
  );

  return new WP_Query( $args );
}

add_filter( 'body_class', 'slug_class_name' );
function slug_class_name( $classes ) {
  global $post;
  // add 'post_name' to the $classes array
  $classes[] = $post->post_name .'-page';
  // return the $classes array
  return $classes;
}


function load_more_post() {

  global $wp_query;

  // In most cases it is already included on the page and this line can be removed
  wp_enqueue_script('jquery');

  // register our main script but do not enqueue it yet
  wp_register_script( 'loadmore', get_site_url() . '/src/js/components/loadmore.js', array('jquery') );

  // now the most interesting part
  // we have to pass parameters to myloadmore.js script but we can get the parameters values only in PHP
  // you can define variables directly in your HTML but I decided that the most proper way is wp_localize_script()
  wp_localize_script( 'loadmore', 'misha_loadmore_params', array(
    'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
    'posts' => json_encode( $wp_query->query_vars ), // everything about your loop is here
    'current_page' => get_query_var( 'paged' ) ? get_query_var('paged') : 1,
    'max_page' => $wp_query->max_num_pages
  ) );

  wp_enqueue_script( 'loadmore' );
}

add_action( 'wp_enqueue_scripts', 'load_more_post' );


function loadmore_ajax_handler(){

  // prepare our arguments for the query
  $args = json_decode( stripslashes( $_POST['query'] ), true );
  $args['paged'] = $_POST['page'] + 1; // we need next page to be loaded
  $args['post_status'] = 'publish';
  $args['posts_per_page'] = 5;

  // it is always better to use WP_Query but not here
  query_posts( $args );

  if( have_posts() ) :
    // run the loop
    while( have_posts() ): the_post();

      // look into your theme code how the posts are inserted, but you can use your own HTML of course
      // do you remember? - my example is adapted for Twenty Seventeen theme
      echo '<li class="news-block">';
      import_part('news-article');
      echo '</li>';
      // for the test purposes comment the line above and uncomment the below one
      // the_title();


    endwhile;
  endif;

  die; // here we exit the script and even no wp_reset_query() required!
}



add_action('wp_ajax_loadmore', 'loadmore_ajax_handler'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_loadmore', 'loadmore_ajax_handler'); // wp_ajax_nopriv_{action}
