<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @see https://codex.wordpress.org/Template_Hierarchy
 */
get_header(); ?>
<main class="main">
  <?php import_part('side-copyright'); ?>
  <section class="banner js-banner">
    <div class="banner-content js-banner-content">
      <div class="banner-content-bg js-banner-content-bg">
        <div class="banner-content-img-wrap show-pc" style="background-image: url(<?php echo resolve_asset_url('/images/banner-img.jpg');?>);">
        </div>
        <div class="banner-content-img-wrap show-sp" style="background-image: url(<?php echo resolve_asset_url('/images/banner-img-sp.jpg');?>);">
        </div>
        <p class="banner-text">
          <img class="banner-text-img show-pc" src="<?php echo resolve_asset_url('/images/mv-text.svg');?>" alt="てくてく、いい靴と、いい人生。"/>
          <img class="banner-text-img show-sp" src="<?php echo resolve_asset_url('/images/mv-text-sp.svg');?>" alt="てくてく、いい靴と、いい人生。"/>
        </p>
        <div class="banner-scroll show-pc">
          <img class="banner-scroll-img" src="<?php echo resolve_asset_url('/images/banner-scroll.png');?>" alt=""/>
        </div>
      </div>
      <div class="banner-scroll show-sp">
        <img class="banner-scroll-img" src="<?php echo resolve_asset_url('/images/banner-scroll.png');?>" alt=""/>
      </div>
    </div>
  </section>
  <section class="aim">
    <div class="aim-wrapper">
      <div class="aim-img-top-wrapper">
        <div class="aim-img-top js-observe">
          <img class="aim-img-top-img show-pc" src="<?php echo resolve_asset_url('/images/aim-img1.jpg');?>" alt=""/>
          <img class="aim-img-top-img show-sp" src="<?php echo resolve_asset_url('/images/aim-img1-sp.jpg');?>" alt=""/>
        </div>
      </div>
      <div class="aim-content-wrap js-observe">
        <div class="aim-img-wrap">
          <img class="aim-img-img show-pc" src="<?php echo resolve_asset_url('/images/aim-img2.jpg');?>" alt=""/>
          <img class="aim-img-img show-sp" src="<?php echo resolve_asset_url('/images/aim-img2-sp.jpg');?>" alt=""/>
        </div>
        <div class="aim-text-wrap">
          <?php import_part('footprints') ?>
          <h2 class="aim-heading">
            目指すのは、<br/>
            最高の1足です。
          </h2>
          <p class="aim-text">
            見た目も機能もぴったりな1足に出会うよろこびを私たちは知っています。だからこそ一人でも多くの方にお届けし、体感いただき、その感動をいっしょに分かち合いたい。私たちの靴づくりは、つねにこの思いから発想しています。
          </p>
          <div class="aim-btn">
            <?php import_part('button', array(
                'text' => '靴づくりのこと',
                'back_circle_color' => '#e5e5e5',
                'front_circle_color' => '#84ADC3',
                'link' => get_home_url() . '/making',
                'arrow_color' => '#84B5C5',
              ));
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php import_part('vision'); ?>
  <section class="index-news">
    <div class="index-news-wrapper wrapper">
      <div class="index-news-heading-wrap">
        <h2 class="index-news-heading">新着情報</h2>
        <a class="index-news-btn" href="<?php echo get_home_url() . '/news' ?>">お知らせ一覧</a>
      </div>
      <ul class="index-news-list js-index-news-list js-observe">
        <li class="gutter-sizer"></li>
        <?php
          $args = array(
            'post_type'      => NEWS_POST_TYPE,
            'orderby'        => 'post_date',
            'order'          => 'DESC',
            'post_status'    => 'publish',
            'posts_per_page' => 6
          );

          $index_news = new WP_Query( $args );
        ?>
        <?php while ($index_news->have_posts()) : $index_news->the_post(); ?>
          <li class="news-block">
            <?php import_part('news-article'); ?>
          </li>
        <?php endwhile; ?>
      </ul>
      <?php wp_reset_postdata(); ?>
    </div>
  </section>
  <section class="index-about">
    <div class="index-about-wrapper wrapper js-observe">
      <div class="index-about-content">
        <div class="index-about-image-content show-pc">
          <div class="index-about-image-item">
            <img class="index-about-image-img" src="<?php echo resolve_asset_url('/images/about-img1.png');?>" alt=""/>
          </div>
          <div class="index-about-image-item">
            <img class="index-about-image-img" src="<?php echo resolve_asset_url('/images/about-img2.png');?>" alt=""/>
          </div>
          <div class="index-about-image-item">
            <img class="index-about-image-img" src="<?php echo resolve_asset_url('/images/about-img3.png');?>" alt=""/>
          </div>
        </div>
        <div class="index-about-text-content">
          <?php import_part('footprints', array(
            'modifier' => 'dark',
          )) ?>
          <h2 class="index-about-heading">
            1925年から、靴のことばかりを<br class="show-pc"/>考えてきました。
          </h2>
          <div class="index-about-image-content show-sp">
            <div class="index-about-image-item">
              <img class="index-about-image-img" src="<?php echo resolve_asset_url('/images/about-img1.png');?>" alt=""/>
            </div>
            <div class="index-about-image-item">
              <img class="index-about-image-img" src="<?php echo resolve_asset_url('/images/about-img2.png');?>" alt=""/>
            </div>
            <div class="index-about-image-item">
              <img class="index-about-image-img" src="<?php echo resolve_asset_url('/images/about-img3.png');?>" alt=""/>
            </div>
          </div>
          <div class="index-about-btn">
            <?php import_part('button', array(
                'text' => '私たちについて',
                'back_circle_color' => 'rgba(255,255,255,0.5)',
                'front_circle_color' => '#fff',
                'link' => get_home_url() . '/about',
                'arrow_color' => '#fff',
              ));
            ?>
          </div>
        </div>
      </div>
    </div>
</section>

<section class="instagram-section">
  <div class="instagram-section-wrap js-observe">
    <?php echo do_shortcode( '[instagram-feed showheader=false showfollow=false]' ); ?>
    <div class="instagram-section-wrapper wrapper">
      <a class="instagram-btn" href="https://www.instagram.com/welleg_shoes/" target="_blank">
        <span class="instagram-btn-icon icon-instagram"></span>
        <span class="instagram-btn-text">Instagram</span>
      </a>
    </div>
  </div>
</section>
</main>
<?php
get_footer();

