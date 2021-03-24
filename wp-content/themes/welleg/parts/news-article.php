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
    <h3 class="news-article-heading"><span><?php echo string_limit(get_the_title(), 41); ?></span></h3>
    <time class="news-article-date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>


  </a>

  <div id="news-<?php echo the_ID(); ?>" class="article-modal js-modal">
    <div class="article-modal-content js-modal-content">
      <div class="article-modal-overlay"></div>
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
                <a target="_blank" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink();?>" class="sns-link"><i class="social-icon-icon icon-facebook"></i></a>
              </li>
              <li class="social-icon-item">
                <a class="sns-link" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" href="https://twitter.com/share?url=<?php echo get_permalink();?>" data-show-count="false"><i class="social-icon-icon icon-twitter"></i>
                </a>
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
              </li>
            </ul>
          </div>
          <div class="single-btn">
            <?php import_part('button', array(
                'back_circle_color' => '#e5e5e5',
                'front_circle_color' => '#84ADC3',
                'arrow_color' => '#84B5C5',
                'circle_text' => '一覧に戻る',
                'class_name' => 'js-single-news-btn',
              ));
            ?>
          </div>
        </div>
      </div>
    </div>
    <div class="article-modal-close-btn js-modal-close"></div>
  </div>
</article>