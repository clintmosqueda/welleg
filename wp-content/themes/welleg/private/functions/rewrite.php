<?php

function posts_link( $post_link, $post = 0 ) {
  if ( $post->post_type === NEWS_POST_TYPE ) {
    return home_url( 'news/' . $post->ID . '/' );
  } else if ( $post->post_type === SDG_POST_TYPE ) {
    return home_url( 'sdg/' . $post->ID . '/' );
  } else {
    return $post_link;
  }
}
add_filter( 'post_type_link', 'posts_link', 1, 2 );


add_action( 'init', 'lig_add_post_type_rules' );
function lig_add_post_type_rules() {
  add_rewrite_rule(
      'news/([0-9]+)?$',
      'index.php?post_type=news&p=$matches[1]',
      'top' );
  add_rewrite_rule(
      'sdg/([0-9]+)?$',
      'index.php?post_type=sdg&p=$matches[1]',
      'top' );
}
