<?php
/*
  Plugin Name: Post Connector
  Plugin URI: https://www.post-connector.com/
  Description: With Post Connector you can easily link posts to each other.
  Version: 1.0.1
  Author: Barry Kooij
  Author URI: http://www.barrykooij.com/

	------------------------------------------------------------------------
	Copyright 2009-2014 Cageworks Inc.

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

require_once( dirname( __FILE__ ) . '/core/classes/class-post-connector-core.php' );

/**
 * Class Post_Connector
 */
class Post_Connector extends Post_Connector_Core {


	/**
	 * Post Connector constructor
	 */
	public function __construct() {

		// Do the parent init
		parent::init();

		// did the user click on upgrade to pro link?
		if( isset( $_GET['page'] ) && $_GET['page'] === 'post_connector_go_pro' && false === headers_sent() ) {
			header("Location: https://www.post-connector.com/?utm_source=plugin&utm_medium=link&utm_campaign=menu-upgrade-link");
			exit;
		}

		// Setup core only filters
		$manager_filter = new SP_Manager_Filter( self::get_core_dir() . 'classes/co-filters/' );
		$manager_filter->load_filters();

		// Setup core only hooks
		$manager_hooks = new SP_Manager_Hook( self::get_core_dir() . 'classes/co-hooks/' );
		$manager_hooks->load_hooks();
	}

	/**
	 * Get filename of plugin
	 *
	 * @access public
	 * @static
	 * @return String
	 */
	public static function get_plugin_file() {
		return __FILE__;
	}

}

/**
 * The Post Connection __main method
 */
function __post_connector_main() {
	new Post_Connector();
}

// Create object - Plugin init
add_action( 'plugins_loaded', '__post_connector_main' );