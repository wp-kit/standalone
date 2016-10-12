<?php
	
define('THEME_DIR', getcwd());
	
/**
 * Tells WordPress not to load the WordPress theme and output it.
 *
 * @var bool
 */	
define('WP_USE_THEMES', false);

/** Loads the WordPress Environment and Template */
require( dirname( __FILE__ ) . '/wp-blog-header.php' );

// make sure composer has been installed
if( ! file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
	
	wp_die('Composer has not been installed, try running composer', 'Dependancy Error');
	
}


// Use composer to load the autoloader.
require __DIR__ . '/vendor/autoload.php';