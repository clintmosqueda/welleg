<?php get_header(); ?>
<main class="main">
<?php import_part('side-copyright'); ?>
  <?php import_part('heading-page', array(
    'modifier' => '',
    'heading' => '靴づくりのこと',
    'heading_en' => 'MAKING THINGS'
  ));?>
  <section class="making">
    <div class="making-process">
      <?php import_part('process', array(
        'modifier' => '',
        'image' => '/images/process-image1.jpg',
        'label' => '<span class="show-pc">前提にある思い</span><span class="show-sp">採用情報</span>',
        'heading' => 'お顔や性格と同じように、足のかたちも人それぞれです。',
        'text' => '指の長さ、かかとの幅、足幅の広さなど、足の特徴は人によって細かく異なります。合わない靴は、歩いているうちに足が前に寄ってしまい、疲れや足の変形の原因になってしまうことも。私たちは、できるだけ多くの方の足の特徴に合うおしゃれな靴をお届けしたいと思っています。',
        'process_name_image' => '/images/process-thought.svg', 
      )) ?>
      <?php import_part('process', array(
        'modifier' => 'is-even',
        'image' => '/images/process-image2.jpg',
        'label' => '豊富な品揃え',
        'heading' => '数が多いほど、ぴったりの1足に出会えると思っています。',
        'text' => 'サイズのバリエーションは最大18.0-27.5cm。普通幅だけでなく、幅広、幅細なものもあるので、お客さまはぴったりな1足を見つけやすいです。子どもから大人まで、家族でおそろいで履けるシリーズもご用意しています。',
        'process_name_image' => '/images/process-variety.svg',
      )) ?>
      <?php import_part('process', array(
        'modifier' => '',
        'image' => '/images/process-image3.jpg',
        'label' => 'デザイン性の追求',
        'heading' => '履きやすさと同じくらい、見た目もたいせつに。',
        'text' => 'かわいい！と思って買ってみたものの、どう合わせたらいいかわからない……というケースは意外と多いです。買った後も困らない、履くだけでなんだかコーデがしっくり来る。私たちはそんなコンセプトの、シンプルで合わせやすく、それでいてトレンド感がある靴づくりを目指しています。',
        'process_name_image' => '/images/process-design.svg',
      )) ?>
      <?php import_part('process', array(
        'modifier' => 'is-even',
        'image' => '/images/process-image4.jpg',
        'label' => '失敗のすくない靴選び',
        'heading' => '全スタッフの足の特徴と、みんなの試着コメントを掲載しています。',
        'text' => 'インターネットでも安心してお買い物いただけるよう、1足ごとにたくさんのスタッフで試着をし、感想を掲載しています。お客さまに近いサイズ感のスタッフの感想をご覧になれば、ぴったりな靴をお選びいただけるはずです。',
        'process_name_image' => '/images/process-review.svg',
      )) ?>
      <?php import_part('process', array(
        'modifier' => '',
        'image' => '/images/process-image5.jpg',
        'label' => 'リーズナブルな価格設定',
        'heading' => '買いやすさも、履きやすさのひとつだと思っています。',
        'text' => 'ふわっふわの履き心地を長持ちさせられるように、使っている素材は国内有名メーカー以上に高級感があり、長持ちするものを使用。自社でデザインから生産、販売まで行い中間マージンを省くからこそ実現できるプチプライスです。',
        'process_name_image' => '/images/process-price.svg',
      )) ?>
    </div>

    <div class="making-vision">
      <?php import_part('vision'); ?>
    </div>
  </section>
</main>
<?php
get_footer();