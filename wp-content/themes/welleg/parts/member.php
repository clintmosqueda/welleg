<?php
if ( empty( $modifier ) ) { $modifier = ''; }
if ( empty( $url ) ) { $url = ''; }
if ( empty( $image ) ) { $image = ''; }
if ( empty( $heading ) ) { $heading = ''; }
if ( empty( $name ) ) { $name = ''; }
if ( empty( $position ) ) { $position = ''; }
?>

<article class="member <?php echo $modifier;?>">
  <div class="member-frame">
    <div class="member-image" style="background-image: url('<?php echo resolve_asset_url($image);?>')"></div>
  </div>
  <div class="member-content">
    <a class="member-link" href="<?php echo $url;?>">
      <h3 class="member-heading"><?php echo $heading;?></h3>
    </a>
    <div class="member-info">
      <span class="member-name"><?php echo $name;?></span>
      <span class="member-position"><?php echo $position;?></span>
    </div>
  </div>
</article>