<?php get_header(); ?>
<main class="main">
  <?php import_part('side-copyright'); ?>
  <section class="news">
    <p class="news-heading-en">News News News</p>
    <div class="news-wrapper wrapper">
      <div class="news-content-wrap">
        <div class="news-heading-wrap">
          <img class="news-footprint" src="<?php echo resolve_asset_url('/images/footprint.svg'); ?>" alt=""/>
          <h2 class="news-heading">お知らせ</h2>
        </div>
        <?php if (have_posts()) : ?>
        <div class="news-list-wrap">
          <ul class="news-list">
            <?php while (have_posts()) : the_post(); ?>
              <li class="news-block">
                <?php import_part('news-article'); ?>
              </li>
            <?php endwhile; ?>
          </ul>
        </div>
        <?php endif; ?>
        <div class="news-btn">
          <?php import_part('button', array(
              'back_circle_color' => '#e5e5e5',
              'front_circle_color' => '#84ADC3',
              'link' => '/',
              'arrow_color' => '#84B5C5',
              'circle_text' => '読み込む',
            ));
          ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
