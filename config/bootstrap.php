<?php
	
	// if we don't have WPKit at this point we probably should die
	    
	if( ! class_exists('WPKit\\Application') ) {
	
	    wp_die('Creative Little WP Kit Core is not installed, try running composer', 'Dependancy Error');
	    
	}
	
	// initialise WPKit to invoke classes etc.

	wpkit()->init();
	
	// when using REST api OPTIONS needs to return successful
	
	if ( 'OPTIONS' == $_SERVER['REQUEST_METHOD'] ) {
			    
        status_header(200);
        
        exit();
        
    }