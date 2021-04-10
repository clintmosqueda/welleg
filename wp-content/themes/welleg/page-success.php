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
        <div class="contact-form">
          <p class="contact-text">お問い合わせいただきありがとうございます。<br>担当より3営業日内にご連絡いたします。</p>
          <a class="form-back-top" href="<?php echo resolve_url();?>">トップページへ戻る</a>
        </div>
        <aside class="contact-aside">
          <h3 class="contact-label">株式会社Welleg</h3>
          <a href="tel:087-851-6599" class="contact-info">087-851-6599</a>
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