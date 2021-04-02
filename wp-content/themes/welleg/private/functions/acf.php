<?php 
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Recruitment',
		'menu_title'	=> 'RECRUITMENT',
		'menu_slug' 	=> 'recruitment',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
    'update_button' => 'Update',
    'icon_url' => 'dashicons-businessman',
    'position' => 8
  ));

	acf_add_options_page(array(
		'page_title' 	=> 'Department',
		'menu_title'	=> 'DEPARTMENT',
		'menu_slug' 	=> 'department',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
    'update_button' => 'Update',
    'icon_url' => 'dashicons-groups',
    'position' => 8
  ));

	acf_add_options_page(array(
		'page_title' 	=> 'History',
		'menu_title'	=> 'HISTORY',
		'menu_slug' 	=> 'history',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
    'update_button' => 'Update',
    'icon_url' => 'dashicons-clock',
    'position' => 8
  ));
}

function my_acf_admin_head() { 
  ?>
  <style type="text/css">
    .acf-field.acf-accordion .acf-label.acf-accordion-title {
      display: flex;
      justify-content: space-between;
      flex-direction: row-reverse
    }

    .custom-wysiwyg #qt_acf-editor-37_img {
        display: none!important;
    }

    .wysiwyg-job-qualifications .insert-media {
        display: none!important;
    }
      
  </style>
<?php }
  
  add_action('acf/input/admin_head', 'my_acf_admin_head'); ?>