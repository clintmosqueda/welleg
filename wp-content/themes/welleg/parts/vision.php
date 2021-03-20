<section class="vision">
  <div class="vision-img-wrap js-observe">
    <img class="vision-img-img show-pc" src="<?php echo resolve_asset_url('/images/vision-img.jpg');?>" alt=""/>
    <img class="vision-img-img show-sp" src="<?php echo resolve_asset_url('/images/vision-img-sp.jpg');?>" alt=""/>
  </div>
  <div class="vision-wrapper wrapper">
    <div class="vision-content-mainwrap js-observe">
      <div class="vision-content">
        <div class="vision-content-left">
          <?php import_part('footprints') ?>
          <h2 class="vision-heading">
            みんなで、<br/>
            キレイなあしを創る。
          </h2>
        </div>
        <div class="vision-content-right">
          <p class="vision-text">
            企画や製造、デザイン、販売、サポート、経理など。それぞれの立場でお客様に寄り添い、考え、動いていくことが私たちの靴づくりだと思っています。そんな思いに共感してくれる方は、私たちといっしょに働いてみませんか。
          </p>
        </div>
      </div>
      <div class="vision-btn">
        <?php import_part('button', array(
            'text' => '採用情報',
            'back_circle_color' => '#e5e5e5',
            'front_circle_color' => '#84ADC3',
            'link' => get_home_url() . '/recruit',
            'arrow_color' => '#84B5C5',
          ));
        ?>
      </div>
  </div>
  </div>
</section>