<?php
   require('/wp-blog-header.php');  // Wordpress need to recongnise your modal file actually loads most the WordPress functionality that you're used to using.
   $post_id = $_GET['ID'];
   $queried_post = get_post($post_id);
   $queried_object = get_queried_object();
?>

<div class="modal-dialog">
  <div class="modal-content">
    <div class="single-news-wrap">
      <div class="single-news-wrapper wrapper">
        <div class="single-news-heading">
          <h1 class="single-news-title"><?php the_title(); ?></h1>
          <time class="single-news-date" datetime="<?php echo get_the_date('Y.m.d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
        </div>
        <div class="single-news-content">
          <?php the_content(); ?>
        </div>
        <div class="single-news-share">
          <p class="single-new-share-heading">記事をシェアする</p>
          <ul class="social-icon-list">
            <li class="social-icon-item">
              <a href=""><span class="social-icon-icon icon-facebook"></span></a>
            </li>
            <li class="social-icon-item">
              <a href=""><span class="social-icon-icon icon-twitter"></span></a>
            </li>
          </ul>
        </div>
        <div class="single-news-btn">
          <?php import_part('button', array(
              'back_circle_color' => '#e5e5e5',
              'front_circle_color' => '#84ADC3',
              'link' => '/',
              'arrow_color' => '#84B5C5',
              'circle_text' => '一覧に戻る',
            ));
          ?>
        </div>
      </div>
    </div>
  </div>
</div>