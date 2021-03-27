<?php
if ( empty( $modifier ) ) { $modifier = ''; }
if ( empty( $image ) ) { $image = ''; }
if ( empty( $label ) ) { $label = ''; }
if ( empty( $heading ) ) { $heading = ''; }
if ( empty( $text ) ) { $text = ''; }
if ( empty( $process_name_image ) ) { $process_name_image = ''; }
?>

<section class="process is-hidden js-animateIn <?php echo $modifier;?>">
  <div class="wrapper">
    <div class="process-block">
      <div class="process-frame">
        <div class="process-inner-frame is-hidden js-animateIn">
          <img class="process-image" src="<?php echo resolve_asset_url($image)  ?>" alt="">
        </div>
        <img class="process-image-text js-translate-right is-hidden js-animateIn" src="<?php echo resolve_asset_url($process_name_image)  ?>" alt="">
      </div>
      <div class="process-content">
        <div class="process-wrap is-hidden js-animateIn">
          <span class="process-label"><?php echo $label;?></span>
          <h2 class="process-heading"><?php echo $heading;?></h2>
          <p class="process-text"><?php echo $text;?></p> 
        </div>
      </div>
    </div>
  </div>
</section>