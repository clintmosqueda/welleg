<?php
        global $post;
        $post_slug = $post->post_name;
        $url = '';
?>
<?php
  $url = get_site_url() . '/sdg/' . $post_slug;
?>

<article class="sdg-article">
  <span class="sdg-article-link js-article-link" data-href="<?php echo $url; ?>">
    <figure class="sdg-article-image-wrap">
      <img class="sdg-article-image" src="<?php echo get_eyecatch_data(get_the_id(), 'full', resolve_asset_url('/images/no-image.jpeg')); ?>" alt=""/>
    </figure>
    <h3 class="sdg-article-heading"><span><?php echo string_limit(get_the_title(), 59); ?></span></h3>
  </span>

  <div id="sdg-<?php echo the_ID(); ?>" class="article-modal js-modal">
    <div class="article-modal-content js-modal-content">
      <div class="article-modal-overlay js-article-modal-overlay"></div>
      <div class="single-wrap">
        <div class="single-wrapper">
          <div class="single-heading single-heading-sdg">
            <h1 class="single-title single-title-sdg"><?php the_title(); ?></h1>
          </div>
          <div class="single-sdg-logo">
            <ul class="single-sdg-logo-list">
            <?php
              if( have_rows('sdg-logo') ):
                while( have_rows('sdg-logo') ) : the_row();
                  $image = get_sub_field('logo_image');
              ?>
              <li class="single-sdg-logo-item">
                <span class="single-sdg-logo-link">
                  <img src="<?php echo $image; ?>" alt=""/>
                </span>
              </li>
              <?php
                endwhile;
                else :
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
                'arrow_color' => '#84B5C5',
                'circle_text' => '一覧に戻る',
                'class_name' => 'js-single-sdg-btn',
              ));
            ?>
          </div>
        </div>
      </div>
    </div>
    <div class="article-modal-close-btn js-modal-close"></div>
  </div>
</article>