<?php

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