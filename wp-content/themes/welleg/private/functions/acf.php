<?php function my_acf_admin_head() { ?>
  <style type="text/css">
    .acf-field.acf-accordion .acf-label.acf-accordion-title {
      display: flex;
      justify-content: space-between;
      flex-direction: row-reverse
    }

    .custom-wysiwyg #qt_acf-editor-37_img {
        display: none!important;
    }
      
  </style>
<?php }
  
  add_action('acf/input/admin_head', 'my_acf_admin_head'); ?>