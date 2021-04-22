<?php get_header(); ?>
<main class="main">
  <?php import_part('side-copyright'); ?>
  <?php import_part('heading-page', array(
    'modifier' => '',
    'heading' => 'お問い合わせ',
    'heading_en' => 'Contact'
  ));?>
  <section class="contact">
    <div class="wrapper">
      <div class="contact-block">
        <?php while (have_posts()) : the_post(); ?>
          <?php remove_filter ('the_content', 'wpautop'); the_content();?>
        <?php endwhile; ?>
        <aside class="contact-aside">
          <p class="contact-label">株式会社Welleg</p>
          <a href="tel:087-851-6400" class="contact-info">087-851-6400</a>
          <hr class="contact-hr">
          <div class="contact-sns">
            <p class="contact-label">フォローはこちら</p>
            <?php import_part('social-icons'); ?>
          </div>
        </aside>
      </div>
    </div>
  </section>
</main>
<?php
get_footer();