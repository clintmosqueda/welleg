<?php get_header();
global $post;
?>
<main class="main">
<?php import_part('side-copyright'); ?>
  <?php import_part('heading-page', array(
    'modifier' => '',
    'heading' => '採用情報',
    'heading_en' => 'RECRUIT'
  ));?>

<section class="department">
    <div class="wrapper">
      <div class="department-block">
        <h2 class="department-heading is-hidden js-animateIn">部署紹介</h2>
        <div class="department-wrap">
          <?php if( have_rows('department', 'option') ): ?>
            <?php while( have_rows('department', 'option') ): the_row();
              if (!get_sub_field('image', 'option')) {
                $image = resolve_asset_url('/images/no-image2.jpeg');
              } else {
                $image = get_sub_field('image', 'option');
              }
              $title = get_sub_field('title', 'option');
              $content = get_sub_field('content', 'option');
            ?>
              <?php import_part('branch', array(
                'modifier' => 'department-branch is-hidden js-animateIn',
                'image' => $image,
                'heading' => $title,
                'text' => $content,
              ))?>
            <?php endwhile;?>
          <?php endif;?>
        </div>
      </div>
    </div>
  </section>
  
  <?php
  $staff_query = query_staff();
  if($staff_query->have_posts()): ?>
  <section class="staff <?php echo $staff_query->max_num_pages > 1 ? '' : 'is-max-post'; ?>">
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
        <p class="loading">Loading....</p>
        <?php
          if (  $staff_query->max_num_pages > 1 )
            import_part('button-round', array(
            'modifier' => 'staff-members-btn js-staff-members-btn',
            'back_circle_color' => '#e5e5e5',
            'front_circle_color' => '#84ADC3',
            'text' => '読み込む',
          ));
        ?>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <section class="position">
    <div class="wrapper">
      <h2 class="position-heading is-hidden js-animateIn">募集職種</h2>
    </div>
    <?php if( have_rows('job_opening', 'option') ) $vacancy = get_field('job_opening', 'option');?>
    <?php if( $vacancy ) {?>
      <div class="wrapper">
        <p class="position-vacancy is-hidden js-animateIn">現在、求人募集は行っておりません。</p>
      </div>
    <?php } else { ?>
      <div class="position-accordions">
        <?php if( have_rows('recruitment', 'option') ): ?>
          <?php while( have_rows('recruitment', 'option') ): the_row();
          $title = get_sub_field('job_title', 'option');
          $description = get_sub_field('job_description', 'option');
          $qualifications = get_sub_field('job_qualifications', 'option');
          ?>
          <div class="is-hidden js-animateIn position-accordion">
          <?php import_part('accordion', array(
            'modifier' => '',
            'title' => $title,
            'description' => $description,
            'qualifications' => $qualifications,
          ))?>
          </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    <?php }?>
  </section>

</main>
<script>
  var posts_myajax = '<?php echo json_encode( $staff_query->query_vars ) ?>',
    current_page_myajax = 1,
    max_page_myajax = '<?php echo $staff_query->max_num_pages ?>';
</script>
<?php
get_footer();