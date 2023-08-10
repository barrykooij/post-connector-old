<?php
/*
	Plugin Name: Post Connector
	Plugin URI: https://www.post-connector.com/
	Description: With Post Connector you can easily link posts to each other.
	Version: 1.0.10
	Author: Never5
	Author URI: http://www.never5.com/

	------------------------------------------------------------------------
	Copyright 2009-2023 Never5

	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation; either version 2 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
*/

/**
 * The Post Connection __main method
 */
function __post_connector_main() {

	// Don't load free plugin if premium one is activated
	if ( defined( 'POST_CONNECTOR_FILE' ) ) {
		return false;
	}

	// Define FILE constant
	define( 'POST_CONNECTOR_FILE', __FILE__ );

	// Load main plugin file
	require_once plugin_dir_path( POST_CONNECTOR_FILE ) . 'class-post-connector.php';

	// Initiate plugin
	new Post_Connector();
}

// Create object - Plugin init
add_action( 'plugins_loaded', '__post_connector_main', 20 );