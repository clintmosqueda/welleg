<?php
if ( empty( $modifier ) ) { $modifier = ''; }
if ( empty( $title ) ) { $title = ''; }
if ( empty( $description ) ) { $description = ''; }
if ( empty( $qualifications ) ) { $qualifications = ''; }
if ( empty( $url ) ) { $url = ''; }
?>

<section class="accordion js-accordion <?php echo $modifier?>">
  <div class="wrapper">
    <div class="accordion-block">
      <div class="accordion-top js-accordion-trigger">
        <div class="accordion-left">
          <h2 class="accordion-title">
            <span class="accordion-title-icon">
              <span class="accordion-title-icon-wrap"></span>
            </span>
            <?php echo $title?>
          </h2>
        </div>
        <div class="accordion-right">
          <p class="accordion-description"><?php echo $description?></p>
        </div>
      </div>
      <div class="accordion-wrap js-accordion-wrap">
        <div class="accordion-body js-accordion-body">
          <div class="accordion-left"></div>
          <div class="accordion-right">
            <div class="accordion-text">
              <?php echo $qualifications?>
            </div>
            <a class="accordion-button" href="<?php echo resolve_url('contact');?>"><??>質問・応募する</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
