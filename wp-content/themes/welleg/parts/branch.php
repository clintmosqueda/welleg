<?php
if ( empty( $modifier ) ) { $modifier = ''; }
if ( empty( $image ) ) { $image = ''; }
if ( empty( $heading ) ) { $heading = ''; }
if ( empty( $text ) ) { $text = ''; }
?>

<article class="branch <?php echo $modifier;?>">
  <div class="branch-frame">
    <img class="branch-image" src="<?php echo $image;?>" alt="">
  </div>
  <h3 class="branch-heading"><?php echo $heading;?></h3>
  <p class="branch-text"><?php echo $text;?></p>
</article>