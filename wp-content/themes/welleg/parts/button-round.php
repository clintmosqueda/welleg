<?php
  if ( empty( $modifier ) ) { $modifier = ''; }
  if ( empty( $back_circle_color ) ) { $back_circle_color = ''; }
  if ( empty( $front_circle_color ) ) { $front_circle_color = ''; }
  //if ( empty( $link ) ) { $link = ''; }
  if ( empty( $text ) ) { $text = ''; }
?>

<div class="button-round <?php echo $modifier?>">
  <?php if (!empty($link)) : ?>
    <a class="button-round-block" href="<?php echo $link?>">
  <?php else: ?>
    <span class="button-round-block">
  <?php endif; ?>
    <svg class="button-round-svg button-round-gray" width="214" height="214" viewBox="0 0 214 214" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M107 213.5C48.1817 213.5 0.5 165.818 0.5 107C0.5 48.1817 48.1817 0.5 107 0.5C165.818 0.5 213.5 48.1817 213.5 107C213.5 165.818 165.818 213.5 107 213.5Z" stroke="<?php echo $back_circle_color; ?>"/>
    </svg>
    <svg class="button-round-svg button-round-blue" width="214" height="214" viewBox="0 0 214 214" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M107 213.5C48.1817 213.5 0.5 165.818 0.5 107C0.5 48.1817 48.1817 0.5 107 0.5C165.818 0.5 213.5 48.1817 213.5 107C213.5 165.818 165.818 213.5 107 213.5Z" stroke="<?php echo $front_circle_color; ?>"/>
    </svg>
    <p class="button-round-text"><?php echo $text?></p>
  <?php if (!empty($link)) : ?>
    </a>
  <?php else: ?>
    </span>
  <?php endif; ?>
</div>