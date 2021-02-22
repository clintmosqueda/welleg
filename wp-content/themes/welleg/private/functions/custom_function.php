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