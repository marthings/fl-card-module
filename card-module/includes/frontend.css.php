.fl-node-<?php echo $id; ?> .fl-module-content {
	<?php

			// If background color
			if($settings->bg_layout == 'color') { ?>

				background-color:#<?php echo $settings->bg_color; ?>;
				color:#<?php echo $settings->bg_text_color; ?>;

	<?php }

			// If the background is a photo
			elseif($settings->bg_layout == 'photo') { ?>

				background-image: url(<?php echo $settings->bg_photo_src; ?>);
				background-position:<?php echo $settings->bg_position; ?>;
				background-color:#<?php echo $settings->bg_color; ?>;
				color:#<?php echo $settings->bg_text_color; ?>;

		<?php

			// If the background should cover or not
			if($settings->photo_settings == 'cover') { ?>

				background-size:cover;

		<?php } ?>

		<?php
			// If the background should repeat or not
			if($settings->photo_repeat == 'yes') { ?>

				background-repeat:repeat;

		<?php }

			// Not repeated
			else { ?>

				background-repeat:no-repeat;

		<?php } ?>

	<?php }

		// if a height i specified
		if($settings->block_height) { ?>

			height:<?php echo $settings->block_height; ?>px;

	<?php }

		// if a height i specified
		if($settings->borders == 'yes') { ?>

			border-style: solid;
			border-color: #<?php echo $settings->border_color; ?>;
			border-top-width: <?php echo $settings->border_top; ?>px;
			border-bottom-width: <?php echo $settings->border_bottom; ?>px;
			border-left-width: <?php echo $settings->border_left; ?>px;
			border-right-width: <?php echo $settings->border_right; ?>px;

	<?php }

		// if border radius is used
		if($settings->border_radius) { ?>

			border-radius: <?php echo $settings->border_radius; ?>px;

	<?php }

		// if box shadow is used
		if($settings->shadow_units) { ?>

			box-shadow:<?php echo $settings->shadow_units; ?> #<?php echo $settings->shadow_color; ?>;
			-webkit-box-shadow:<?php echo $settings->shadow_units; ?> #<?php echo $settings->shadow_color; ?>;

	<?php } ?>

	padding: <?php echo $settings->padding_top; ?>px <?php echo $settings->padding_right; ?>px <?php echo $settings->padding_bottom; ?>px <?php echo $settings->padding_left; ?>px;
}

/* This overrides BB theme heading colors when a text color is selected */
.fl-node-<?php echo $id; ?> .fl-module-content h1,
.fl-node-<?php echo $id; ?> .fl-module-content h2,
.fl-node-<?php echo $id; ?> .fl-module-content h3,
.fl-node-<?php echo $id; ?> .fl-module-content h4,
.fl-node-<?php echo $id; ?> .fl-module-content h5,
.fl-node-<?php echo $id; ?> .fl-module-content h6 {
	color:#<?php echo $settings->bg_text_color; ?>;
}

.fl-node-<?php echo $id; ?> .fl-block-photo {
	<?php
		// Sets the image to span the whole card width
		if($settings->card_with_padding == 'no') { ?>
		margin:-<?php echo $settings->padding_top; ?>px -<?php echo $settings->padding_left; ?>px 10px -<?php echo $settings->padding_left; ?>px;
		display:block;
	<?php } ?>
}

/* Reset the height on smaller devices */
@media (max-width:767px) {
	.fl-node-<?php echo $id; ?> .fl-module-content {
		height:auto !important;
	}
}
