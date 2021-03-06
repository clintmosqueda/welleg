<?php
        global $post;
        $post_slug = $post->post_name;
        $url = '';
?>
<?php
  if(is_front_page()) {
    $url = get_site_url() . '/news/' . $post_slug;
  } else {
    $url = $post_slug;
  }
?>

<article class="news-article">
  <a class="news-article-link js-article-link" href="<?php echo $url; ?>">
    <figure class="news-article-image-wrap">
      <img class="news-article-image" src="<?php echo get_eyecatch_data(get_the_id()); ?>" alt=""/>
    </figure>
    <h3 class="news-article-heading"><?php echo get_the_title(); ?></h3>
    <time class="news-article-date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y/m/d'); ?></time>


  </a>

  <div id="news-<?php echo the_ID(); ?>" class="article-modal js-modal">
    <div class="article-modal-content js-modal-content">
      <div class="single-wrap">
        <div class="single-wrapper">
          <div class="single-heading">
            <h1 class="single-title"><?php the_title(); ?></h1>
            <time class="single-date" datetime="<?php echo get_the_date('Y.m.d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
          </div>
          <div class="single-content">
            <figure class="single-content-img-wrap">
              <img class="single-content-img" src="<?php echo get_eyecatch_data(get_the_id()); ?>" alt=""/>
            </figure>
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
    </div>
    <div class="article-modal-close-btn js-modal-close"></div>
  </div>
</article>