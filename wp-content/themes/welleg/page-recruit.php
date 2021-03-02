<?php get_header(); ?>
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
        <h2 class="department-heading">部署紹介</h2>
        <div class="department-wrap">
          <?php import_part('branch', array(
            'modifier' => 'department-branch',
            'image' => '/images/department-image.png',
            'heading' => '商品部',
            'text' => 'ダミー文章です。商品部の業務内容を簡単に説明します。ダミー文章です。商品部の業務内容を簡単に説明します。ダミー文章です。商品部の業務内容を簡単に説明します。ダミー文章です。商品部の業務内容を簡単に説明します。',
          ))?>
          <?php import_part('branch', array(
            'modifier' => 'department-branch',
            'image' => '/images/department-image.png',
            'heading' => 'クリエイティブ',
            'text' => 'ダミー文章です。商品部の業務内容を簡単に説明します。ダミー文章です。商品部の業務内容を簡単に説明します。ダミー文章です。商品部の業務内容を簡単に説明します。ダミー文章です。商品部の業務内容を簡単に説明します。',
          ))?>
          <?php import_part('branch', array(
            'modifier' => 'department-branch',
            'image' => '/images/department-image.png',
            'heading' => 'セールス',
            'text' => 'ダミー文章です。商品部の業務内容を簡単に説明します。ダミー文章です。商品部の業務内容を簡単に説明します。ダミー文章です。商品部の業務内容を簡単に説明します。ダミー文章です。商品部の業務内容を簡単に説明します。',
          ))?>
          <?php import_part('branch', array(
            'modifier' => 'department-branch',
            'image' => '/images/department-image.png',
            'heading' => 'カスタマー＆デリバリー',
            'text' => 'ダミー文章です。商品部の業務内容を簡単に説明します。ダミー文章です。商品部の業務内容を簡単に説明します。ダミー文章です。商品部の業務内容を簡単に説明します。ダミー文章です。商品部の業務内容を簡単に説明します。',
          ))?>
          <?php import_part('branch', array(
            'modifier' => 'department-branch',
            'image' => '/images/department-image.png',
            'heading' => 'システム',
            'text' => 'ダミー文章です。商品部の業務内容を簡単に説明します。ダミー文章です。商品部の業務内容を簡単に説明します。ダミー文章です。商品部の業務内容を簡単に説明します。ダミー文章です。商品部の業務内容を簡単に説明します。',
          ))?>
          <?php import_part('branch', array(
            'modifier' => 'department-branch',
            'image' => '/images/department-image.png',
            'heading' => '経理・総務',
            'text' => 'ダミー文章です。商品部の業務内容を簡単に説明します。ダミー文章です。商品部の業務内容を簡単に説明します。ダミー文章です。商品部の業務内容を簡単に説明します。ダミー文章です。商品部の業務内容を簡単に説明します。',
          ))?>
        </div>
      </div>
    </div>
  </section>
  <section class="staff">
    <div class="wrapper">
      <div class="staff-block">
        <h2 class="staff-heading">スタッフ紹介</h2>
        <div class="staff-members">
          <?php import_part('member', array(
            'modifier' => 'staff-member',
            'url' => '',
            'image' => '/images/staff-image1.jpg',
            'heading' => '人によってちがう履き心地を、<br>どうしたら最適化できるか。',
            'name' => '宮本 浩子',
            'position' => 'クリエイティブ',
          ))?>
          <?php import_part('member', array(
            'modifier' => 'staff-member',
            'url' => '',
            'image' => '/images/staff-image2.jpg',
            'heading' => '人によってちがう履き心地を、<br>どうしたら最適化できるか。',
            'name' => '宮本 浩子',
            'position' => 'クリエイティブ',
          ))?>
          <?php import_part('member', array(
            'modifier' => 'staff-member',
            'url' => '',
            'image' => '/images/staff-image3.jpg',
            'heading' => '人によってちがう履き心地を、<br>どうしたら最適化できるか。',
            'name' => '宮本 浩子',
            'position' => 'クリエイティブ',
          ))?>
          <?php import_part('member', array(
            'modifier' => 'staff-member',
            'url' => '',
            'image' => '/images/staff-image4.jpg',
            'heading' => '人によってちがう履き心地を、<br>どうしたら最適化できるか。',
            'name' => '宮本 浩子',
            'position' => 'クリエイティブ',
          ))?>
          <?php import_part('member', array(
            'modifier' => 'staff-member',
            'url' => '',
            'image' => '/images/staff-image5.jpg',
            'heading' => '人によってちがう履き心地を、<br>どうしたら最適化できるか。',
            'name' => '宮本 浩子',
            'position' => 'クリエイティブ',
          ))?>
        </div>
        <div class="staff-button">
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
  <section class="position">
    <div class="wrapper">
      <h2 class="position-heading">募集職種</h2>
    </div>
    <div class="position-accordions">
      <?php import_part('accordion')?>
      <?php import_part('accordion')?>
      <!--?php import_part('accordion')?-->
    </div>
  </section>
<main>
<?php
get_footer();