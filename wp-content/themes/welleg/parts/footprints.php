<?php
  if ( empty( $modifier ) ) { $modifier = ''; }
?>

<div class="footprints">
  <?php if($modifier == 'dark') : ?>
    <img class="footprints-img" src="<?php echo resolve_asset_url('/images/footprint3.svg');?>" alt=""/>
  <?php else: ?>
    <img class="footprints-img" src="<?php echo resolve_asset_url('/images/footprint1.svg');?>" alt=""/>
  <?php endif; ?>
  <img class="footprints-img" src="<?php echo resolve_asset_url('/images/footprint2.svg');?>" alt=""/>
</div>