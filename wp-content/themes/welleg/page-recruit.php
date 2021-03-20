<?php get_header();
global $post;
?>
<main class="main">
<?php import_part('side-copyright'); ?>
  <?php import_part('heading-page', array(
    'modifier' => '',
    'heading' => '採用情報',
    'heading_en' => 'RECRUIT RECRUIT'
  ));?>


  <?php
  $staff_query = query_staff();

  if($staff_query->have_posts()): ?>
  <section class="staff">
    <div class="wrapper">
      <div class="staff-block">
        <h2 class="staff-heading is-hidden js-animateIn">スタッフ紹介</h2>
        <div class="staff-members js-staff-members">
          <?php
          while($staff_query->have_posts()):
          $staff_query->the_post();
          $message = get_field('message', get_the_ID());
          $staf_position = get_field('staf_position', get_the_ID());
          $staff_picture = get_sub_field('staff_picture', get_the_ID());
          if( have_rows('staff_info', get_the_ID()) ):
            while( have_rows('staff_info', get_the_ID()) ): the_row();
              $staff_picture = get_sub_field('staff_picture', get_the_ID());
              break;
            endwhile;
          endif;
          if( have_rows('descriptions', get_the_ID()) ):
            while( have_rows('descriptions', get_the_ID()) ): the_row();
              $title = get_sub_field('title', get_the_ID());
            endwhile;
          endif;
          ?>
          <?php import_part('member', array(
            'modifier' => 'staff-member is-hidden js-animateIn',
            'url' => get_permalink(),
            'image' => $staff_picture,
            'heading' => $message,
            'name' => get_the_title(),
            'position' => $staf_position,
          ))?>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        </div>
        <?php
          if (  $staff_query->max_num_pages > 1 )
            import_part('button-round', array(
            'modifier' => 'js-staff-members-btn',
            'back_circle_color' => '#e5e5e5',
            'front_circle_color' => '#84ADC3',
            'text' => '読み込む',
          ));
        ?>
      </div>
    </div>
  </section>
  <?php endif; ?>

</main>
<script>
  var posts_myajax = '<?php echo json_encode( $staff_query->query_vars ) ?>',
    current_page_myajax = 1,
    max_page_myajax = '<?php echo $staff_query->max_num_pages ?>';
</script>
<?php
get_footer();