<?php

	//=================================
	/* Booking confirm */
	//=================================

	if ( ! defined( 'ABSPATH' ) ) {
		exit(); 
	}

	if( empty($_GET['confirmation-code']) ) {
		exit();
	}

	require_once( SEATREG_PLUGIN_FOLDER_DIR . 'registration/php/reg_functions.php' );
	require_once( SEATREG_PLUGIN_FOLDER_DIR . 'php/SeatregConfirmBooking.php' );
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="icon" href="<?php echo get_site_icon_url(); ?>" />
	<title>
		<?php esc_html_e('Booking confirm', 'seatreg'); ?>
	</title>
</head>
<body>
	<div>
		<?php
			$validator = new SeatregConfirmBooking($_GET['confirmation-code']);
			$validator->startConfirm();
		?>
	</div>
</body>
</html>