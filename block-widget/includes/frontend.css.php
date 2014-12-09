.fl-node-<?php echo $id; ?> .fl-module-content {
	<?php
	if($settings->bg_layout == 'color') { ?>

		background-color: #<?php echo $settings->bg_color; ?>;
		color: #<?php echo $settings->bg_text_color; ?>;

	<?php } elseif($settings->bg_layout == 'photo') { ?>

		background-image: url(<?php echo $settings->bg_photo_src; ?>);

		<?php if($settings->photo_settings == 'cover') { ?>

			background-size:cover;

		<?php } elseif($settings->photo_settings == 'center') { ?>

			background-position:center center;

		<?php } ?>

		<?php if($settings->photo_repeat == 'yes') { ?>

			background-repeat:repeat;

		<?php } else { ?>

			background-repeat:no-repeat;

		<?php } ?>

		color:#<?php echo $settings->bg_photo_color; ?>;

	<?php } ?>
	height:<?php echo $settings->block_height; ?>px;

	border-radius: <?php echo $settings->border_radius; ?>px;
	border-style: solid;
	border-color: #<?php echo $settings->border_color; ?>;
	border-top-width: <?php echo $settings->border_top; ?>px;
	border-bottom-width: <?php echo $settings->border_bottom; ?>px;
	border-left-width: <?php echo $settings->border_left; ?>px;
	border-right-width: <?php echo $settings->border_right; ?>px;
	padding-top: <?php echo $settings->padding_top; ?>px;
	padding-bottom: <?php echo $settings->padding_bottom; ?>px;
	padding-left: <?php echo $settings->padding_left; ?>px;
	padding-right: <?php echo $settings->padding_right; ?>px;
}

@media (max-width:767px) {
	.fl-node-<?php echo $id; ?> .fl-module-content {
		height:auto !important;
	}
}
