
  <footer class="footer">
    <div class="footer-top js-observe">
      <h2 class="footer-top-heading">
        <img class="footer-top-heading-text" src="<?php echo resolve_asset_url('/images/footer-top-title.svg') ?>" alt=""/>
      </h2>

      <div class="footer-top-image-wrap">
        <p class="footer-top-text js-footer-top-text">WE MAKE SHOES WITH OUR HEART</p>
        <img class="footer-top-image" src="<?php echo resolve_asset_url('/images/footer-img.png') ?>" alt=""/>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="footer-wrapper wrapper">
        <div class="footer-shoplist">
          <?php import_part('shoplist'); ?>
        </div>
        <div class="footer-social">
          <a class="footer-social-text" href="<?php echo get_home_url() . '/privacy' ?>">プライバシーポリシー</a>
          <?php import_part('social-icons'); ?>
        </div>
        <p class="footer-copyright show-sp">&copy; Welleg Inc. 2021</p>
      </div>
    </div>
  </footer>
</div> <!-- end wrap -->

  <?php wp_footer(); ?>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

  <script src="<?php echo resolve_asset_url('/js/app.js'); ?>"></script>
</body>
</html>
