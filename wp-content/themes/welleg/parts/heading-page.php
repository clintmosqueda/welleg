<?php
if ( empty( $modifier ) ) { $modifier = ''; }
if ( empty( $heading ) ) { $heading = ''; }
if ( empty( $heading_en ) ) { $heading_en = ''; }
?>

<section class="heading-page <?php echo $modifier;?>">
  <div class="wrapper">
    <div class="heading-block">
      <div class="heading-footprints">
        <span class="heading-footprint icon icon-footprint"></span>
        <span class="heading-footprint icon icon-footprint"></span>
      </div>
      <h1 class="heading-title"><?php echo $heading;?></h1>
      <p class="heading-en"><?php echo $heading_en?></p>
    </div>
  </div>
</section>