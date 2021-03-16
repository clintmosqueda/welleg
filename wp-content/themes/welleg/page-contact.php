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
        <!-- <div class="contact-form">
          <p class="contact-text">お買い上げいただいた商品についてのお問い合わせはこちらよりお願いいたします。
          <a href="">Dummy Link Address</a></p>
          <hr class="contact-hr">
          <form class="form" action="">
            <div class="form-fieldset">
              <label class="form-label">ご用件<span>*</span></label>
              <div class="form-select-wrapper">
                <select class="form-select">
                  <option value="inquiry1">inquiry1</option>
                  <option value="inquiry2">inquiry2</option>
                  <option value="inquiry3">inquiry2</option>
                </select>
              </div>
            </div>
            <div class="form-fieldset">
              <label class="form-label">お名前<span>*</span></label>
              <input type="text" class="form-input">
            </div>
            <div class="form-fieldset">
              <label class="form-label">メールアドレス<span>*</span></label>
              <input type="text" class="form-input">
            </div>
            <div class="form-fieldset">
              <label class="form-label">社名</label>
              <input type="text" class="form-input">
            </div>
            <div class="form-fieldset">
              <label class="form-label">社名</label>
              <textarea class="form-textarea" placeholder="例） ○○○について詳しく聞かせてほしい。"></textarea>
            </div>
            <div class="form-agree">
              <label class="form-custom-label">
                <input type="checkbox">
                <span class="form-custom-checkbox"></span>
              </label>
              <p class="form-text"><a href="">プライバシーポリシー</a>に同意する</p>
            </div>
            <button class="form-submit">送信する</button>
          </form>
        </div> -->
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