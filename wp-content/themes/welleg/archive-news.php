<?php get_header(); ?>
<main class="main">
  <?php import_part('side-copyright'); ?>
  <?php import_part('heading-page', array(
    'modifier' => '',
    'heading' => 'お知らせ',
    'heading_en' => 'News News News'
  ));?>
  <section class="news">
    <div class="news-wrapper wrapper">
      <div class="news-content-wrap">
        <!-- <div class="news-heading-wrap">
          <img class="news-footprint" src="<?php echo resolve_asset_url('/images/footprint.svg'); ?>" alt=""/>
          <h2 class="news-heading">お知らせ</h2>
        </div> -->
        <div class="news-list-wrap js-observe">
          <ul class="news-list js-news-list">
            <?php if (have_posts()) : ?>

                <?php while (have_posts()) : the_post(); ?>
                  <li class="news-block">
                    <?php import_part('news-article'); ?>
                  </li>
                <?php
                  endwhile;
                  wp_reset_postdata();
                ?>

            <?php endif; ?>
          </ul>
        </div>
        <div class="news-btn">
          <?php
            global $wp_query; // you can remove this line if everything works for you

            // don't display the button if there are not enough posts
            if (  $wp_query->max_num_pages > 1 )
              import_part('button', array(
                'circle_text' => '読み込む',
                'back_circle_color' => '#e5e5e5',
                'front_circle_color' => '#84ADC3',
                'arrow_color' => '#84B5C5',
              ));
              // echo '<div class="news-btn">
              //         <div class="button-svg-wrap">
              //           <svg class="button-circle button-circle-gray" viewBox="0 0 200 200">
              //               <path d="M 100, 100 m -75, 0 a 75,75 0 1,0 150,0 a 75,75 0 1,0 -150,0" stroke="#e5e5e5" stroke-width="1" fill="none" />
              //           </svg>
              //           <svg class="button-circle button-circle-blue" viewBox="0 0 200 200">
              //               <path d="M 100, 100 m -75, 0 a 75,75 0 1,0 150,0 a 75,75 0 1,0 -150,0" stroke="#84ADC3" stroke-width="1" fill="none" />
              //           </svg>
              //           <p class="button-circle-text">読み込む</p>
              //         </div>
              //       </div>'; // you can use <a> as well
          ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
