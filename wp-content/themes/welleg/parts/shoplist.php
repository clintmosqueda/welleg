<div class="shoplist">
  <h3 class="shoplist-title">ショップリスト</h3>
  <?php
    if( have_rows('shoplist', 'option') ):
  ?>
  <ul class="shoplist-list">
    <?php
      while( have_rows('shoplist', 'option') ) : the_row();
      $shop = get_sub_field('shop', 'option');
      $shop_link = get_sub_field('shop_link', 'option');
    ?>
      <li class="shoplist-item">
        <a class="shoplist-link" href="<?php echo $shop_link; ?>" target="_blank"><?php echo $shop; ?></a>
      </li>
    <?php
      endwhile;
      else :
    ?>
  </ul>
  <?php
    endif;
  ?>
</div>