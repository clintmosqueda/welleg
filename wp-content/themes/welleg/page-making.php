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
        'label' => '前提にある思い',
        'heading' => 'お顔や性格と同じように、足のかたちも人それぞれです。',
        'text' => '指の長さ、かかとの幅、足幅の広さなど、足の特徴は人によって細かく異なります。合わない靴は、歩いているうちに足が前に寄ってしまい、疲れや足の変形の原因になってしまうことも。私たちは、できるだけ多くの方の足の特徴に合うおしゃれな靴をお届けしたいと思っています。',
        'process_name_image' => '/images/process-variety.svg',
      )) ?>
      <?php import_part('process', array(
        'modifier' => '',
        'image' => '/images/process-image3.jpg',
        'label' => '前提にある思い',
        'heading' => 'お顔や性格と同じように、足のかたちも人それぞれです。',
        'text' => '指の長さ、かかとの幅、足幅の広さなど、足の特徴は人によって細かく異なります。合わない靴は、歩いているうちに足が前に寄ってしまい、疲れや足の変形の原因になってしまうことも。私たちは、できるだけ多くの方の足の特徴に合うおしゃれな靴をお届けしたいと思っています。',
        'process_name_image' => '/images/process-design.svg',
      )) ?>
      <?php import_part('process', array(
        'modifier' => 'is-even',
        'image' => '/images/process-image4.jpg',
        'label' => '前提にある思い',
        'heading' => 'お顔や性格と同じように、足のかたちも人それぞれです。',
        'text' => '指の長さ、かかとの幅、足幅の広さなど、足の特徴は人によって細かく異なります。合わない靴は、歩いているうちに足が前に寄ってしまい、疲れや足の変形の原因になってしまうことも。私たちは、できるだけ多くの方の足の特徴に合うおしゃれな靴をお届けしたいと思っています。',
        'process_name_image' => '/images/process-review.svg',
      )) ?>
      <?php import_part('process', array(
        'modifier' => '',
        'image' => '/images/process-image5.jpg',
        'label' => '前提にある思い',
        'heading' => 'お顔や性格と同じように、足のかたちも人それぞれです。',
        'text' => '指の長さ、かかとの幅、足幅の広さなど、足の特徴は人によって細かく異なります。合わない靴は、歩いているうちに足が前に寄ってしまい、疲れや足の変形の原因になってしまうことも。私たちは、できるだけ多くの方の足の特徴に合うおしゃれな靴をお届けしたいと思っています。',
        'process_name_image' => '/images/process-price.svg',
      )) ?>
    </div>

    <div class="making-vision">
      <?php import_part('vision'); ?>
    </div>
  </section>
<main>
<?php
get_footer();