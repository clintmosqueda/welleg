<article class="news-article">
  <a class="news-article-link" href="<?php the_permalink(); ?>">
    <figure class="news-article-image-wrap">
      <img class="news-article-image" src="<?php echo get_eyecatch_data(get_the_id()); ?>" alt=""/>
    </figure>
    <h3 class="news-article-heading"><?php echo get_the_title(); ?></h3>
    <time class="news-article-date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y/m/d'); ?></time>
  </a>
</article>