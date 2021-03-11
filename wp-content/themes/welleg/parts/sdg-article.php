<?php
        global $post;
        $post_slug = $post->post_name;
        $url = '';
?>
<?php
  $url = get_site_url() . '/sdg/' . $post_slug;
?>

<article class="sdg-article">
  <a class="sdg-article-link js-article-link" href="<?php echo $url; ?>">
    <figure class="sdg-article-image-wrap">
      <img class="sdg-article-image" src="<?php echo get_eyecatch_data(get_the_id()); ?>" alt=""/>
    </figure>
    <h3 class="sdg-article-heading"><?php echo string_limit(get_the_title(), 10); ?></h3>
  </a>

  <div id="sdg-<?php echo the_ID(); ?>" class="article-modal js-news-modal">
    <div class="article-modal-content js-modal-content">
      <div class="single-wrap">
        <div class="single-wrapper">
          <div class="single-heading single-heading-sdg">
            <h1 class="single-title single-title-sdg"><?php the_title(); ?></h1>
          </div>
          <div class="single-sdg-logo">
            <!-- <img class="single-sdg-icon-img" src="<?php echo resolve_asset_url('/images/single-sdg-img.png');?>" alt=""/> -->
            <ul class="single-sdg-logo-list">
            <?php
              if( have_rows('sdg-logo') ):
                while( have_rows('sdg-logo') ) : the_row();
                  $image = get_sub_field('logo_image');
                  $link = get_sub_field('logo_link');
              ?>
              <li class="single-sdg-logo-item">
                <a class="single-sdg-logo-link" href="<?php echo $link; ?>" target="_blank">
                  <img src="<?php echo $image; ?>" alt=""/>
                </a>
              </li>
              <?php
                  // End loop.
                  endwhile;

              // No value.
              else :
                  // Do something...
              endif;
            ?>
            </ul>
          </div>
          <div class="single-content">
            <figure class="single-content-img-wrap single-content-img-wrap-sdg">
              <img class="single-content-img" src="<?php echo get_eyecatch_data(get_the_id()); ?>" alt=""/>
            </figure>
            <?php the_content(); ?>
          </div>
          <div class="single-btn single-btn-sdg">
            <?php import_part('button', array(
                'back_circle_color' => '#e5e5e5',
                'front_circle_color' => '#84ADC3',
                'link' => get_home_url() . "/about#sdg",
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