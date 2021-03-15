<?php get_header(); 
global $post;
?>
<main class="main">
<?php import_part('side-copyright'); ?>
  <?php import_part('heading-page', array(
    'modifier' => '',
    'image' => '/images/heading-recruit.svg',
    'heading' => '採用情報'
  ));?>
  <section class="department">
    <div class="wrapper">
      <div class="department-block">
        <h2 class="department-heading is-hidden js-animateIn">部署紹介</h2>
        <div class="department-wrap">
          <?php import_part('branch', array(
            'modifier' => 'department-branch is-hidden js-animateIn',
            'image' => '/images/department-image.png',
            'heading' => '商品部',
            'text' => 'ダミー文章です。商品部の業務内容を簡単に説明します。ダミー文章です。商品部の業務内容を簡単に説明します。ダミー文章です。商品部の業務内容を簡単に説明します。ダミー文章です。商品部の業務内容を簡単に説明します。',
          ))?>
          <?php import_part('branch', array(
            'modifier' => 'department-branch is-hidden js-animateIn',
            'image' => '/images/department-image.png',
            'heading' => 'クリエイティブ',
            'text' => 'ダミー文章です。商品部の業務内容を簡単に説明します。ダミー文章です。商品部の業務内容を簡単に説明します。ダミー文章です。商品部の業務内容を簡単に説明します。ダミー文章です。商品部の業務内容を簡単に説明します。',
          ))?>
          <?php import_part('branch', array(
            'modifier' => 'department-branch is-hidden js-animateIn',
            'image' => '/images/department-image.png',
            'heading' => 'セールス',
            'text' => 'ダミー文章です。商品部の業務内容を簡単に説明します。ダミー文章です。商品部の業務内容を簡単に説明します。ダミー文章です。商品部の業務内容を簡単に説明します。ダミー文章です。商品部の業務内容を簡単に説明します。',
          ))?>
          <?php import_part('branch', array(
            'modifier' => 'department-branch is-hidden js-animateIn',
            'image' => '/images/department-image.png',
            'heading' => 'カスタマー＆デリバリー',
            'text' => 'ダミー文章です。商品部の業務内容を簡単に説明します。ダミー文章です。商品部の業務内容を簡単に説明します。ダミー文章です。商品部の業務内容を簡単に説明します。ダミー文章です。商品部の業務内容を簡単に説明します。',
          ))?>
          <?php import_part('branch', array(
            'modifier' => 'department-branch is-hidden js-animateIn',
            'image' => '/images/department-image.png',
            'heading' => 'システム',
            'text' => 'ダミー文章です。商品部の業務内容を簡単に説明します。ダミー文章です。商品部の業務内容を簡単に説明します。ダミー文章です。商品部の業務内容を簡単に説明します。ダミー文章です。商品部の業務内容を簡単に説明します。',
          ))?>
          <?php import_part('branch', array(
            'modifier' => 'department-branch is-hidden js-animateIn',
            'image' => '/images/department-image.png',
            'heading' => '経理・総務',
            'text' => 'ダミー文章です。商品部の業務内容を簡単に説明します。ダミー文章です。商品部の業務内容を簡単に説明します。ダミー文章です。商品部の業務内容を簡単に説明します。ダミー文章です。商品部の業務内容を簡単に説明します。',
          ))?>
        </div>
      </div>
    </div>
  </section>

  <?php
  $staff_query = query_staff();
  if($staff_query->have_posts()): ?>
  <section class="staff">
    <div class="wrapper">
      <div class="staff-block">
        <h2 class="staff-heading is-hidden js-animateIn">スタッフ紹介</h2>
        <div class="staff-members">
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
        <div class="staff-button is-hidden js-animateIn">
          <?php import_part('button-round', array(
            'modifier' => '',
            'back_circle_color' => '#e5e5e5',
            'front_circle_color' => '#84ADC3',
            'link' => '/',
            'text' => '読み込む',
          ));
          ?>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>
  <section class="position">
    <div class="wrapper">
      <h2 class="position-heading is-hidden js-animateIn">募集職種</h2>
    </div>
    <div class="position-accordions">
      <?php if( have_rows('recruitment', 'option') ): ?>
        <?php while( have_rows('recruitment', 'option') ): the_row();
        $title = get_sub_field('job_title', 'option');
        $description = get_sub_field('job_description', 'option');
        $qualifications = get_sub_field('job_qualifications', 'option');
        $qualifications_clean = str_replace(array('<p>','</p>', '<br>'),'',$qualifications);
        $url = get_sub_field('url', 'option');
        ?>
        <div class="is-hidden js-animateIn">
        <?php import_part('accordion', array(
          'modifier' => '',
          'title' => $title,
          'description' => $description,
          'qualifications' => $qualifications,
          'url' => $url,
        ))?>
        </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </section>
</main>
<?php
get_footer();