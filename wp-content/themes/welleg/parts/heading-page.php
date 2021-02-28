<?php
if ( empty( $modifier ) ) { $modifier = ''; }
if ( empty( $image ) ) { $image = ''; }
if ( empty( $heading ) ) { $heading = ''; }
?>

<section class="heading-page <?php echo $modifier;?>">
  <div class="wrapper">
    <div class="heading-block">
      <div class="heading-footprints">
        <span class="heading-footprint icon icon-footprint"></span>
        <span class="heading-footprint icon icon-footprint"></span>
      </div>
      <img class="heading-image" src="<?php echo resolve_asset_url($image);?>" alt="">
      <h1 class="heading-title"><?php echo $heading;?></h1>
    </div>
  </div>
</section>