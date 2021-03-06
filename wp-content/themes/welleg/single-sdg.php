<?php
/**
 * The template for displaying all single posts.
 *
 * @see    https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 */
get_header(); ?>
<main class="main">
  <div class="single-wrap">
    <div class="single-wrapper wrapper">
      <div class="single-heading">
        <h1 class="single-title"><?php the_title(); ?></h1>
        <time class="single-date" datetime="<?php echo get_the_date('Y.m.d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
      </div>
      <div class="single-content">
        <?php the_content(); ?>
      </div>
      <div class="single-share">
        <p class="single-share-heading">記事をシェアする</p>
        <ul class="social-icon-list">
          <li class="social-icon-item">
            <a href=""><span class="social-icon-icon icon-facebook"></span></a>
          </li>
          <li class="social-icon-item">
            <a href=""><span class="social-icon-icon icon-twitter"></span></a>
          </li>
        </ul>
      </div>
      <div class="single-btn">
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
</main>
<?php
get_footer();