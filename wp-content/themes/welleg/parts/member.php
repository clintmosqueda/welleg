<?php
if ( empty( $modifier ) ) { $modifier = ''; }
if ( empty( $url ) ) { $url = ''; }
if ( empty( $image ) ) { $image = ''; }
if ( empty( $heading ) ) { $heading = ''; }
if ( empty( $label ) ) { $label = ''; }
?>

<article class="member <?php echo $modifier;?>">
  <div class="member-frame">
    <div class="member-image" style="background-image: url('<?php echo resolve_asset_url($image);?>')"></div>
  </div>
  <div class="member-content">
    <a class="member-link" href="<?php echo $url;?>">
      <h3 class="member-heading"><?php echo $heading;?></h3>
    </a>
    <span class="member-label"><?php echo $label;?></span>
  </div>
</article>