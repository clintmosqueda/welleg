<?php
        global $post;
        $post_slug = $post->post_name;
        $url = '';
?>
<?php
  if(is_front_page()) {
    $url = get_site_url() . '/sdg/' . $post_slug;
  } else {
    $url = $post_slug;
  }
?>

<article class="sdg-article">
  <a class="sdg-article-link js-news-article-link" href="<?php echo $url; ?>">
    <figure class="sdg-article-image-wrap">
      <img class="sdg-article-image" src="<?php echo get_eyecatch_data(get_the_id()); ?>" alt=""/>
    </figure>
    <h3 class="sdg-article-heading"><?php echo get_the_title(); ?></h3>
  </a>

  <div id="sdg-<?php echo the_ID(); ?>" class="article-modal js-news-modal">
    <div class="article-modal-content js-modal-content">
      <div class="single-news-wrap">
        <div class="single-news-wrapper">
          <div class="single-news-heading">
            <h1 class="single-news-title"><?php the_title(); ?></h1>
            <time class="single-news-date" datetime="<?php echo get_the_date('Y.m.d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
          </div>
          <div class="single-news-content">
            <figure class="single-news-image-wrap">
              <img class="single-news-article-image" src="<?php echo get_eyecatch_data(get_the_id()); ?>" alt=""/>
            </figure>
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
    <div class="article-modal-close-btn js-news-close"></div>
  </div>
</article>