<?php

//NEWS
$args = array(
    'label' => 'News',

    'labels' => array(
        'singular_name' => NEWS_POST_TYPE,
        'menu_name' => strtoupper(NEWS_POST_TYPE),
        'add_new_item' => 'Add New News Post Title',
        'add_new' => 'Add News' ,
        'new_item' => 'New Item',
        'edit_item' => 'Edit News Post',
        'view_item' => 'View News Post',
        'not_found' => 'No Posts Found',
        'not_found_in_trash' => 'ゴミ箱に投稿はありません。',
        'search_items' => 'Search News Post',
    ),

    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'has_archive' => true,
    'hierarchical' => false,
    'menu_position' => 5,
    'rewrite' => true,

    'supports' => array('title', 'editor', 'thumbnail'),
);

register_post_type(NEWS_POST_TYPE,$args);

//news category
$args = array(

  'label'        => 'News Categories',
  'labels'       => array(
    'name'          => 'News Categories',
    'singular_name' => 'News Category',
    'all_items'     => 'News Categories'
  ),
  'hierarchical' => true,
  'public'       => true,
  'show_ui'      => true,
  'rewrite'      => array( 'slug' => NEWS_POST_TYPE_CATEGORY ),
  'show_in_rest' => true
);
register_taxonomy( NEWS_POST_TYPE_CATEGORY, array( NEWS_POST_TYPE ), $args );



//SDGsの取り組み
$args = array(
    'label' => 'News',

    'labels' => array(
        'singular_name' => SDG_POST_TYPE,
        'menu_name' => strtoupper(SDG_POST_TYPE),
        'add_new_item' => 'Add New SDGsの取り組み',
        'add_new' => 'Add New SDGsの取り組み' ,
        'new_item' => 'New Item',
        'edit_item' => 'Edit SDGsの取り組み Post',
        'view_item' => 'View SDGsの取り組み Post',
        'not_found' => 'No Posts Found',
        'not_found_in_trash' => 'ゴミ箱に投稿はありません。',
        'search_items' => 'Search SDGsの取り組み Post',
    ),

    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'has_archive' => true,
    'hierarchical' => false,
    'menu_position' => 5,
    'rewrite' => true,

    'supports' => array('title', 'editor', 'thumbnail'),
);

register_post_type(SDG_POST_TYPE,$args);

//SDGsの取り組み category
$args = array(

  'label'        => 'SDGsの取り組み Categories',
  'labels'       => array(
    'name'          => 'SDGsの取り組み Categories',
    'singular_name' => 'SDGsの取り組み Category',
    'all_items'     => 'SDGsの取り組み Categories'
  ),
  'hierarchical' => true,
  'public'       => true,
  'show_ui'      => true,
  'rewrite'      => array( 'slug' => SDG_POST_TYPE_CATEGORY ),
  'show_in_rest' => true
);
register_taxonomy( SDG_POST_TYPE_CATEGORY, array( SDG_POST_TYPE ), $args );


//STAFF
$args = array(
  'label' => 'Staff',

  'labels' => array(
      'singular_name' => STAFF_POST_TYPE,
      'menu_name' => strtoupper(STAFF_POST_TYPE),
      'add_new_item' => 'Add New Staff Post Title',
      'add_new' => 'Add Staff' ,
      'new_item' => 'New Item',
      'edit_item' => 'Edit Staff Post',
      'view_item' => 'View Staff Post',
      'not_found' => 'No Posts Found',
      'not_found_in_trash' => 'ゴミ箱に投稿はありません。',
      'search_items' => 'Search Staff Post',
  ),

  'public' => true,
  'publicly_queryable' => true,
  'show_ui' => true,
  'show_in_menu' => true,
  'query_var' => true,
  'has_archive' => true,
  'hierarchical' => false,
  'menu_position' => 5,
  'rewrite' => true,

  'supports' => array('title', 'editor', 'thumbnail'),
);

register_post_type(STAFF_POST_TYPE,$args);

