<?php
$pop_up_title = get_field('pop_up_title');
$pop_up_description = get_field('pop_up_description');
$pop_up_image = get_field('pop_up_image');
?>

<div class="desc-pop-up">
  <div class="pop-up-container">
      <?php if ($pop_up_title): ?>
        <div class="pop-up-title"><?= $pop_up_title ?></div>
      <?php endif; ?>
      <?php if ($pop_up_description): ?>
        <div class="pop-up-text"><?= $pop_up_description ?></div>
      <?php endif; ?>
      <?php if ($pop_up_image): ?>
        <img class="pop-up-img" src="<?= $pop_up_image ?>">
      <?php endif; ?>
  </div>
  <svg class="pop-up-close">
    <use xlink:href="#svg-close">
  </svg>
  <div class="pop-up-caret"></div>
</div>