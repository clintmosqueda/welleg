<?php
if ( empty( $modifier ) ) { $modifier = ''; }
if ( empty( $image ) ) { $image = ''; }
if ( empty( $heading ) ) { $heading = ''; }
if ( empty( $text ) ) { $text = ''; }
?>

<article class="branch is-hidden js-animateIn <?php echo $modifier;?>">
  <img class="branch-image" src="<?php echo resolve_asset_url($image);?>" alt="">
  <h3 class="branch-heading"><?php echo $heading;?></h3>
  <p class="branch-text"><?php echo $text;?></p>
</article>