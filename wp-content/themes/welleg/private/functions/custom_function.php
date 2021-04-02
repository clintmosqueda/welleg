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

function query_staff() {
  $args = array(
    'post_type'      => STAFF_POST_TYPE,
    'post_status'    => 'publish',
    'posts_per_page' => 5,
    'order'          => 'DESC',
    'orderby'        => 'post_date',
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

  wp_enqueue_script('jquery');

  wp_register_script( 'loadmore', get_template_directory_uri() . '/assets/js/loadmore.js', array('jquery') );

  wp_localize_script( 'loadmore', 'misha_loadmore_params', array(
    'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php',
    'posts' => json_encode( $wp_query->query_vars ),
    'current_page' => get_query_var( 'paged' ) ? get_query_var('paged') : 1,
    'max_page' => $wp_query->max_num_pages,
    'post_type' => $wp_query->post_type,
  ) );

  wp_enqueue_script( 'loadmore' );
}

add_action( 'wp_enqueue_scripts', 'load_more_post' );

function loadmore_ajax_handler(){

  $args = json_decode( stripslashes( $_POST['query'] ), true );
  $args['paged'] = $_POST['page'] + 1;
  $args['post_status'] = 'publish';

  query_posts( $args );

  if( have_posts() ) :
    while( have_posts() ): the_post();

      if($args['post_type'] === 'news') {
        echo '<li class="news-block">';
          import_part('news-article');
        echo '</li>';
      }
      else if($args['post_type'] === 'sdg') {
        echo '<li class="about-sdg-block">';
          import_part('sdg-article');
        echo '</li>';
      }
      else {
        $message = get_field('message', get_the_ID());
        $staf_position = get_field('staf_position', get_the_ID());
        $staff_picture = get_sub_field('staff_picture', get_the_ID());
        if( have_rows('staff_info', get_the_ID()) ):
          while( have_rows('staff_info', get_the_ID()) ): the_row();
            $staff_picture = get_sub_field('staff_picture', get_the_ID());
            break;
          endwhile;
        endif;

        import_part('member', array(
          'modifier' => 'staff-member js-animateIn',
          'url' => get_permalink(),
          'image' => $staff_picture,
          'heading' => $message,
          'name' => get_the_title(),
          'position' => $staf_position,
        ));
      }

    endwhile;
    
  endif;

  die();

}

add_action('wp_ajax_loadmore', 'loadmore_ajax_handler');
add_action('wp_ajax_nopriv_loadmore', 'loadmore_ajax_handler');


function get_ajax_posts() {
  $args = array(
    'post_type' => $_POST['post_type'],
    'p' => $_POST['id'],
  );

  $ajaxposts = new WP_Query( $args );

  $response = '';

  if ( $ajaxposts->have_posts() ) {
    while ( $ajaxposts->have_posts() ) {
        $ajaxposts->the_post();
        if($_POST['post_type'] === 'news') {
          echo '<li class="news-block">';
            import_part('news-article');
          echo '</li>';
        }
        else {
          echo '<li class="about-sdg-block">';
            import_part('sdg-article');
          echo '</li>';
        }
        
    }
  } else {
    $response .= get_template_part('none');
  }

  //echo $response;

  exit; // leave ajax call
}
add_action('wp_ajax_get_ajax_posts', 'get_ajax_posts');
add_action('wp_ajax_nopriv_get_ajax_posts', 'get_ajax_posts');


add_action( 'pre_get_posts', 'change_posts_per_page' );
function change_posts_per_page( $query ) {
  if( !$query->is_post_type_archive('sdg') || is_admin() ) return;

  $posts_per_page = wp_is_mobile() ? 3 : 4;
  $query->set( 'posts_per_page', $posts_per_page );
  return;
}


