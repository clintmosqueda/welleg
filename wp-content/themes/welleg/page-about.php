<?php get_header(); ?>
<main class="main">
  <?php import_part('side-copyright'); ?>
  <?php import_part('heading-page', array(
    'modifier' => '',
    'image' => '/images/heading-about.svg',
    'heading' => '靴づくりのこと'
  ));?>
  <section class="about-slider">
    <div class="about-slider-list">
      <div class="about-slider-item">
        <div class="about-slider-image-wrap show-pc">
          <img class="about-slider-image" src="<?php echo resolve_asset_url('/images/about-slider1.jpg');?>" alt=""/>
        </div>
        <div class="about-slider-image-wrap show-sp">
          <img class="about-slider-image" src="<?php echo resolve_asset_url('/images/about-slider3-sp.jpg');?>" alt=""/>
        </div>
      </div>
      <div class="about-slider-item">
        <div class="about-slider-image-wrap show-pc">
          <img class="about-slider-image" src="<?php echo resolve_asset_url('/images/about-slider2.jpg');?>" alt=""/>
        </div>
        <div class="about-slider-image-wrap show-sp">
          <img class="about-slider-image" src="<?php echo resolve_asset_url('/images/about-slider3-sp.jpg');?>" alt=""/>
        </div>
      </div>
      <div class="about-slider-item">
        <div class="about-slider-image-wrap show-pc">
          <img class="about-slider-image" src="<?php echo resolve_asset_url('/images/about-slider1.jpg');?>" alt=""/>
        </div>
        <div class="about-slider-image-wrap show-sp">
          <img class="about-slider-image" src="<?php echo resolve_asset_url('/images/about-slider3-sp.jpg');?>" alt=""/>
        </div>
      </div>
      <div class="about-slider-item">
        <div class="about-slider-image-wrap show-pc">
          <img class="about-slider-image" src="<?php echo resolve_asset_url('/images/about-slider2.jpg');?>" alt=""/>
        </div>
        <div class="about-slider-image-wrap show-sp">
          <img class="about-slider-image" src="<?php echo resolve_asset_url('/images/about-slider3-sp.jpg');?>" alt=""/>
        </div>
      </div>
      <div class="about-slider-item">
        <div class="about-slider-image-wrap show-pc">
          <img class="about-slider-image" src="<?php echo resolve_asset_url('/images/about-slider1.jpg');?>" alt=""/>
        </div>
        <div class="about-slider-image-wrap show-sp">
          <img class="about-slider-image" src="<?php echo resolve_asset_url('/images/about-slider3-sp.jpg');?>" alt=""/>
        </div>
      </div>
      <div class="about-slider-item">
        <div class="about-slider-image-wrap show-pc">
          <img class="about-slider-image" src="<?php echo resolve_asset_url('/images/about-slider2.jpg');?>" alt=""/>
        </div>
        <div class="about-slider-image-wrap show-sp">
          <img class="about-slider-image" src="<?php echo resolve_asset_url('/images/about-slider3-sp.jpg');?>" alt=""/>
        </div>
      </div>
    </div>
  </section>
  <section class="about-statement">
    <div class="about-statement-wrapper wrapper">
      <h2 class="about-statement-heading">ステートメント</h2>
      <div class="about-statement-content">
        <p class="about-statement-text">
          1925年から、靴のことばかりを考えてきました。<br/>
          いい靴とは、素敵な一日へと連れていってくれる存在である。 <br/>
          私たちはそう信じてやみません。
        </p>
        <p class="about-statement-text">
          いい人生を歩む、なんて言い方をすることがあります。<br/>
          今日もいい一日だったな、とお客さまに思っていただくこと。<br/>
          そんな毎日を、人生を、歩んでいただくこと。<br/>
          靴をあつかう私たちにとっての「歩く」とは、<br/>
          そういうことなのかもしれません。
        </p>
        <p class="about-statement-text">
          履きやすくて、疲れにくくて、コーディネートが楽しくなるような。<br/>
          それでいて、とってもリーズナブルな商品を、<br/>
          少しでも多くの方に届けたい。<br/>
          情熱をこめた靴づくりと、画面越しでも温もりを感じられるおもてなしで、<br/>
          ぴったりの靴と出会うよろこびを提供する。
        </p>
        <p class="about-statement-text">
          何年経っても変わらない、私たちの使命です。
        </p>
        <p class="about-statement-slogan">キレイなあしを創る</p>
      </div>
      <img class="about-statement-image show-pc" src="<?php echo resolve_asset_url('/images/boy-girl.png') ?>" alt=""/>
    </div>
  </section>
  <section class="about-banner">
    <img class="about-banner-image show-pc" src="<?php echo resolve_asset_url('/images/about-banner.jpg') ?>" alt=""/>
    <img class="about-banner-image show-sp" src="<?php echo resolve_asset_url('/images/about-banner-sp.jpg') ?>" alt=""/>
  </section>
  <section class="about-business">
    <div class="about-business-wrapper wrapper">
      <div class="about-business-wrap">
        <div class="about-business-block">
          <p class="about-business-block-tag">企業理念</p>
          <div class="about-business-block-content">
            <h3 class="about-business-block-title">キレイなあしを創る</h3>
            <p class="about-business-block-text">
              わたしたちにとってのキレイなあしとは、美脚という意味ではありません。ぴったりなサイズを履く、そんな自分のことを誰かが褒めてくれる、そして、もっと自分に自信が持てるようになる、わたしたちの靴を履くお客さまにはそんな毎日を送ってもらいたいという願いを込めています。
            </p>
          </div>
        </div>
        <div class="about-business-block">
          <p class="about-business-block-tag">ビジョン</p>
          <div class="about-business-block-content">
            <h3 class="about-business-block-title">ごきげんスイッチを押す</h3>
            <p class="about-business-block-text">
              ちょっとした気づかい、心づかいで、だれかをちょっとしあわせにできる。お客さまにも、スタッフ同士でも、取引先の方にも、自分自身にも、お互いにちょっとうれしくなる、そんな行動を積み重ねるとみんなでしあわせになれる。そんな会社にしたいと考えています。
            </p>
          </div>
        </div>
        <div class="about-business-block">
          <p class="about-business-block-tag">ミッション</p>
          <div class="about-business-block-content">
            <h3 class="about-business-block-title">今日をいい一日にする</h3>
            <p class="about-business-block-text">
              小さいことでもあたらしいことに毎日挑戦すると、成功しても失敗しても少しずつ前に進むことができる。昨日の自分より少し成長したなと思える、1日の終りに今日は頑張ったなーと思える、そんな毎日を繰り返せることってステキですよね。
            </p>
          </div>
        </div>
      </div>
      <img class="about-business-image" src="<?php echo resolve_asset_url('/images/boy-girl.png') ?>" alt=""/>
    </div>
  </section>
  <section class="about-action">
    <div class="about-action-wrapper wrapper">
      <h2 class="about-action-heading">行動指針</h2>
      <div class="about-action-content">
        <div class="about-action-block">
          <h3 class="about-action-block-title">Challenge</h3>
          <p class="about-action-block-text">
            同じことをずっと繰り返し、進歩しないこと＝退化と同じだと考えています。間違ってもいい、失敗してもいい、小さなことでも変化していくことが大きな成功につながります。
          </p>
        </div>
        <div class="about-action-block">
          <h3 class="about-action-block-title">LEARNING</h3>
          <p class="about-action-block-text">
            これまでになかった感動をつくって、世界で一番やさしい靴屋さんになりたい。そのためには、人に言われてやるのではない、自ら進んで勉強することが大切だと考えています。
          </p>
        </div>
        <div class="about-action-block">
          <h3 class="about-action-block-title">TEAM</h3>
          <p class="about-action-block-text">
            アフリカのことわざ、 早く行きたければ、ひとりで行け。遠くまで行きたければ、みんなで行け。のようにたくさんのキレイなあしを創るためには、みんなで協力する必要があります。
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="about-intelligence">
    <div class="about-intelligence-wrapper wrapper">
      <h2 class="about-intelligence-heading">企業情報</h2>
      <div class="about-intelligence-content">
        <div class="about-intelligence-content-left">
          <dl class="description-list">
            <dt>会社名</dt>
            <dd>株式会社Welleg</dd>
          </dl>
          <dl class="description-list">
            <dt>所在地</dt>
            <dd>
              〒760-0064　香川県高松市朝日新町18-22 <br/>
              <a href="">GoogleMap</a>
            </dd>
          </dl>
          <dl class="description-list">
            <dt>設立</dt>
            <dd>1949年(創業：1925年)</dd>
          </dl>
          <dl class="description-list">
            <dt>資本金</dt>
            <dd>2000万円</dd>
          </dl>
        </div>
        <div class="about-intelligence-content-right">
          <dl class="description-list">
            <dt>事業内容</dt>
            <dd>
              ECサイトの企画・運営・管理 <br/>
              靴、小物、アパレル商品の企画・製造・販売
            </dd>
          </dl>
          <dl class="description-list">
            <dt>主な取引先</dt>
            <dd>
              楽天株式会社 <br/>
              アマゾンジャパン株式会社<br/>
              eBay Japan合同会社<br/>
              ヤフー株式会社<br/>
              KDDIコマースフォワード株式会社<br/>
              株式会社ZOZO<br/>
              CROOZ SHOPLIST 株式会社<br/>
              その他、国内メーカー
            </dd>
          </dl>
        </div>
      </div>
    </div>
  </section>
  <section class="about-history">
    <div class="about-history-wrapper wrapper">
      <h2 class="about-history-heading">沿革</h2>
      <div class="about-history-content">
        <dl class="description-list">
          <dt>1925年</dt>
          <dd>
            植村武市 高松市丸亀町において履物商「ひしや商店」開業
          </dd>
        </dl>
        <dl class="description-list">
          <dt>1946年</dt>
          <dd>
            植村勇 継承、高松市丸亀町において履物卸売に専業
          </dd>
        </dl>
        <dl class="description-list">
          <dt>1950年</dt>
          <dd>
            <span>資本金200万円にて、株式会社菱屋商店を設立 </span>
            <span>月星化成株式会社と代理店契約、総合履物類の卸売に変更 </span>
            <span>資本金400万円に増資 </span>
          </dd>
        </dl>
        <dl class="description-list">
          <dt>1952年</dt>
          <dd>
            <span>社名を株式会社菱屋に変更</span>
            <span>高松市古馬場町に新社屋竣工、移転(菱屋第一ビル)、店舗、倉庫、社員寮、鉄筋三階建、延面積2000㎡</span>
          </dd>
        </dl>
      </div>
      <div class="about-history-btn">
        <?php
          import_part('button', array(
            'link' => '/',
            'circle_text' => '読み込む',
            'back_circle_color' => '#e5e5e5',
            'front_circle_color' => '#84ADC3',
            'arrow_color' => '#84B5C5',
          ));
        ?>
      </div>
    </div>
  </section>
  <section class="about-sdg">
    <div class="about-sdg-wrapper wrapper">
      <h2 class="about-sdg-heading">SDGsの取り組み</h2>
      <ul class="about-sdg-news-list">
        <?php
          $args = array(
            'post_type'      => SDG_POST_TYPE,
            'orderby'        => 'post_date',
            'order'          => 'DESC',
            'post_status'    => 'publish',
            'posts_per_page' => 4
          );

          $index_sdg = new WP_Query( $args );
        ?>
        <?php while ($index_sdg->have_posts()) : $index_sdg->the_post(); ?>
          <li class="about-sdg-block">
            <?php import_part('sdg-article'); ?>
          </li>
        <?php endwhile; ?>
      </ul>
      <?php wp_reset_postdata(); ?>
    </div>
  </section>
</main>
<?php
get_footer();