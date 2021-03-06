<?php 
get_header(); 
global $post;
?>
<main class="main">
  <section class="single-staff">
    <div class="single-staff-wrapper">
      <div class="single-staff-body">
        <?php while (have_posts()) : the_post(); ?>
          <div class="single-staff-header">
            <?php if(get_field('message')) : ?>
              <h1 class="single-staff-heading"><?php the_field('message'); ?></h1>
            <?php endif; ?>
            <div class="single-staff-icon">
              <span class="icon icon-footprint"></span>
              <span class="icon icon-footprint"></span>
            </div>
            <div class="single-staff-info">
              <span class="single-staff-name"><?php the_title();?></span>
              <?php if(get_field('staf_position')) : ?>
                <span class="single-staff-position"><?php the_field('staf_position'); ?></span>
              <?php endif; ?>
            </div>
          </div>

          <?php if( have_rows('staff_info') ): ?>
            <?php while( have_rows('staff_info') ): the_row();
              $staff_picture = get_sub_field('staff_picture');
            ?>
              <div class="single-staff-block">
                <div class="single-staff-frame">
                  <div class="single-staff-image" style="background-image: url('<?php echo $staff_picture?>')"></div>
                </div>

                <?php if( have_rows('descriptions') ): ?>
                  <?php while( have_rows('descriptions') ): the_row();
                    $title = get_sub_field('title');
                    $content = get_sub_field('content');
                  ?>  
                    <div class="single-staff-content">
                      <div class="single-staff-content-heading">
                        <h2 class="single-staff-content-title"><?php echo $title; ?></h2>
                      </div>
                      <div class="single-staff-content-text">
                        <div class="single-staff-par"> <?php echo $content; ?></div>
                      </div>
                    </div>
                  <?php endwhile; ?>
                <?php endif; ?>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>

        <?php endwhile; ?>

      </div>
    </div>
  </section>
  <div class="staff-related">
    <div class="staff-related-block">
      <h2 class="staff-related-title">他のスタッフも読む</h2>
      <?php 
        $args = array(
          'post_type'      => STAFF_POST_TYPE,
          'orderby'        => 'post_date',
          'order'          => 'DESC',
          'post_status'    => 'publish',
          'posts_per_page' => -1,
          'post__not_in'   => array( get_the_ID() ),
        );
        $related_args = new WP_Query( $args );

        $message = get_field('message', get_the_ID());
        $staf_position = get_field('staf_position', get_the_ID());
        if( have_rows('descriptions', get_the_ID()) ): 
          while( have_rows('descriptions', get_the_ID()) ): the_row();
            $title = get_sub_field('title', get_the_ID());
            $staff_picture = get_sub_field('staff_picture', get_the_ID());
          endwhile;
        endif;
      ?>
      <div class="staff-related-members">
        <?php while( $related_args->have_posts()) : $related_args->the_post(); ?>
          <?php import_part('member', array(
            'modifier' => 'staff-related-member',
            'url' => get_permalink(),
            'image' => $staff_picture,
            'heading' => $message,
            'name' => get_the_title(),
            'position' => $staf_position,
          ))?>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <!--?php import_part('member', array(
          'modifier' => 'staff-related-member',
          'url' => '',
          'image' => '/images/staff-image2.jpg',
          'heading' => '人によってちがう履き心地を、<br>どうしたら最適化できるか。',
          'name' => '宮本 浩子',
          'position' => 'クリエイティブ',
        ))?-->
        <!--?php import_part('member', array(
          'modifier' => 'staff-related-member',
          'url' => '',
          'image' => '/images/staff-image2.jpg',
          'heading' => '人によってちがう履き心地を、<br>どうしたら最適化できるか。',
          'name' => '宮本 浩子',
          'position' => 'クリエイティブ',
        ))?-->
        <!--?php import_part('member', array(
          'modifier' => 'staff-related-member',
          'url' => '',
          'image' => '/images/staff-image2.jpg',
          'heading' => '人によってちがう履き心地を、<br>どうしたら最適化できるか。',
          'name' => '宮本 浩子',
          'position' => 'クリエイティブ',
        ))?-->
      </div>
    </div>
  </div>
</main>

<?php
get_footer();