<?php

// Your changeable header business starts here
	define( 'HEADER_TEXTCOLOR', 'CCC' );

// The height and width of your custom header. You can hook into the theme's own filters to change these values.
	// Add a filter to coraline_header_image_width and coraline_header_image_height to change these values.
	define( 'HEADER_IMAGE_WIDTH', apply_filters( 'coraline_header_image_width', 750 ) );
	define( 'HEADER_IMAGE_HEIGHT', apply_filters( 'coraline_header_image_height', 300 ) );
	
?>