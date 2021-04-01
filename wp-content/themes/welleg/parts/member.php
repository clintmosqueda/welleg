<?php
if ( empty( $modifier ) ) { $modifier = ''; }
if ( empty( $url ) ) { $url = ''; }
if ( empty( $image ) ) { $image = ''; }
if ( empty( $heading ) ) { $heading = ''; }
if ( empty( $name ) ) { $name = ''; }
if ( empty( $position ) ) { $position = ''; }
?>

<a href="<?php echo $url;?>" class="member <?php echo $modifier;?>">
  <div class="member-frame">
    <div class="member-image" style="background-image: url('<?php echo $image;?>')"></div>
  </div>
  <div class="member-content">
    <h3 class="member-heading js-post-heading"><?php echo $heading; ?></h3>
    <div class="member-info">
      <span class="member-name"><?php echo $name;?></span>
      <span class="member-position"><?php echo $position;?></span>
    </div>
  </div>
</a>