<?php

	/**
	 * You probably don't need to change this
	 *
	 * @var string
	 */
	define( 'APP_ROOT', getcwd() );
	
	/**
	 * Tells wp-kit to output error messages, set this to
	 * false for production sites
	 *
	 * @var bool
	 */
	define( 'WPKIT_DEBUG', true );
	
	/**
	 * In case you are installing wp-kit in a sub-directory
	 * you can set the base path here
	 *
	 * @var string
	 */
	define( 'BASE_PATH', '/api' );
		
	/**
	 * Tells WordPress not to load the WordPress theme and output it.
	 *
	 * @var bool
	 */	
	define( 'WP_USE_THEMES', false );
	
	/** Loads the WordPress Environment and Template */
	require __DIR__ . '/../wp-blog-header.php';
	
	/** make sure composer has been installed */
	if( ! file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
		
		wp_die('Composer has not been installed, try running composer', 'Dependancy Error');
		
	}
	
	/** Use composer to load the autoloader. */
	require __DIR__ . '/vendor/autoload.php';
	
	/** Run the core hook to instantiate wp-kit */
	do_action( 'wpkit_init' );
	
