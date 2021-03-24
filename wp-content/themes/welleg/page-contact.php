<?php get_header(); ?>
<main class="main">
  <?php import_part('side-copyright'); ?>
  <?php import_part('heading-page', array(
    'modifier' => '',
    'heading' => 'お問い合わせ',
    'heading_en' => 'Contact Contact'
  ));?>
  <section class="contact">
    <div class="wrapper">
      <div class="contact-block">
        <?php while (have_posts()) : the_post(); ?>
          <?php remove_filter ('the_content', 'wpautop'); the_content();?>
        <?php endwhile; ?>
        <aside class="contact-aside">
          <h3 class="contact-label">株式会社Welleg</h3>
          <p class="contact-info">〒760-0064 
            香川県高松市朝日新町18-22 
            0120-006-911 (9:00~18:00) 
            info@dummy.jp 
            www.dummy.jp</p>
          <hr class="contact-hr">
          <div class="contact-sns">
            <h3 class="contact-label">フォローはこちら</h3>
            <?php import_part('social-icons'); ?>
          </div>
        </aside>
      </div>
    </div>
  </section>
</main>
<?php
get_footer();