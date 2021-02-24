<?php
if ( empty( $modifier ) ) { $modifier = ''; }
if ( empty( $image ) ) { $image = ''; }
if ( empty( $heading ) ) { $heading = ''; }
if ( empty( $text ) ) { $text = ''; }
?>

<article class="department <?php echo $modifier;?>">
  <img class="department-image" src="<?php echo resolve_asset_url($image);?>" alt="">
  <h3 class="department-heading"><?php echo $heading;?></h3>
  <p class="department-text"><?php echo $text;?></p>
</article>