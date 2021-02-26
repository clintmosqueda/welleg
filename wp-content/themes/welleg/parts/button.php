<?php
  //if ( empty( $text ) ) { $text = ''; }
  if ( empty( $back_circle_color ) ) { $back_circle_color = ''; }
  if ( empty( $front_circle_color ) ) { $front_circle_color = ''; }
  if ( empty( $link ) ) { $link = ''; }
  if ( empty( $arrow_color ) ) { $arrow_color = ''; }
?>
<a class="button-link" href="<?php echo $link; ?>">
    <div class="button-svg-wrap">
      <svg class="button-circle button-circle-gray" viewBox="0 0 200 200">
          <path d="M 100, 100 m -75, 0 a 75,75 0 1,0 150,0 a 75,75 0 1,0 -150,0" stroke="<?php echo $back_circle_color; ?>" stroke-width="1" fill="none" />
      </svg>
      <svg class="button-circle button-circle-blue" viewBox="0 0 200 200">
          <path d="M 100, 100 m -75, 0 a 75,75 0 1,0 150,0 a 75,75 0 1,0 -150,0" stroke="<?php echo $front_circle_color; ?>" stroke-width="1" fill="none" />
      </svg>
      <?php if (!empty($circle_text)) : ?>
        <p class="button-circle-text"><?php echo $circle_text; ?></p>
      <?php else : ?>
        <svg class="button-arrow" width="26" height="16" viewBox="0 0 26 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M16.4498 3.43559L23.811 6.886L2.16047 14.7661" stroke="<?php echo $arrow_color; ?>" stroke-width="1.5"/>
        </svg>
      <?php endif; ?>
    </div>
    <?php if (!empty($text)) : ?>
      <p class="button-text"><?php echo $text; ?></p>
    <?php endif; ?>


</a>