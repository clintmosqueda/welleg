<?php get_header(); ?>
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
        </div>
      </div>
    </div>
  </section>
<?php
get_footer();