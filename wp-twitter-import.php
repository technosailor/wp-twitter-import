<?php
/*
Plugin Name: WP Twitter Import
Author: Aaron Brazell
Author URI: http://technosailor.com
Description: A <a href="http://wp-cli.org">WP-CLI</a> extension for importing Twitter archives.
Version: 0.1
License: MIT
License URI: http://opensource.org/licenses/MIT
*/

if ( defined('WP_CLI') && WP_CLI ) {

class WP_Twitter_Import extends WP_Cli_Command {

	function import( $args, $assoc_args ) {
		
	}
}

WP_CLI::add_command( 'twitter', 'WP_Twitter_Import' );
}