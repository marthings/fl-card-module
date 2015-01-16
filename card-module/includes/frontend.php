<div class="fl-block-widget">
    <?php if($settings->card_photo) { ?>
      <div class="fl-block-photo">
        <img src="<?php echo $settings->card_photo_src; ?>">
      </div>
    <?php } ?>
    <?php echo $settings->editor_field; ?>
</div>
