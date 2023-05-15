<?php
/*
PLUGIN NAME: Handysignatur After Submit
Version: 1.0.2
Description: Plugin zum Einbinden der digitalen Handysignatur A-Trust GmbH.
Author: smartcoding.at
Author URI: https://smartcoding.at
Plugin URI: https://handysignatur-after-submit.at/
Text Domain: handysignatur-after-submit
Domain Path: /src/assets/languages
Requires PHP: 7.3
*/
/**
 * @package     Handysignatur After Submit
 * @copyright   Copyright (c) 2022, smartcoding.at 
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */

/* Exit if accessed directly */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/*
 * Set base constants we'll use throughout the plugin wos iiis
 */
define( 'HANDYSIGNATUR_AFTER_SUBMIT_VERSION', '1.0.0' ); /* the current plugin version */
define( 'HANDYSIGNATUR_PLUGIN_DIR', plugin_dir_path( __FILE__ ) ); /* plugin directory path */
define( 'HANDYSIGNATUR_PLUGIN_URL', plugin_dir_url( __FILE__ ) ); /* plugin directory url */
define( 'HANDYSIGNATUR_PLUGIN_BASENAME', plugin_basename( __FILE__ ) ); /* the plugin basename */

define( 'UPLOADS', 'wp-content/'.'uploads' );

define( 'HANDYSIGNATUR_CONTENT', ABSPATH .'wp-content' ); /* plugin directory path */
define( 'HANDYSIGNATUR_PLUGIN', (ABSPATH .'wp-content/plugins') ); /* plugin directory url */
define( 'HANDYSIGNATUR_UPLOADS', (ABSPATH .'wp-content/uploads') ); /* plugin directory url */
define( 'HANDYSIGNATUR_THEME', (get_stylesheet_directory()) ); /* the plugin basename */

/*
 * init plugin
 */
require_once( HANDYSIGNATUR_PLUGIN_DIR . '/src/inc/backend/backend_plugin_init.php');

/*
 * enque styles and scripts
 */
require_once( HANDYSIGNATUR_PLUGIN_DIR . '/src/inc/backend/backend_style_init.php');

/*
 * init backend page
 */
require_once(HANDYSIGNATUR_PLUGIN_DIR . '/src/inc/backend/backend_page_init.php');

/*
 * init ayax 
 */
require_once(HANDYSIGNATUR_PLUGIN_DIR . '/src/inc/backend/backend_ayax_init.php');

/*
 * init signature 
 */
require_once(HANDYSIGNATUR_PLUGIN_DIR . '/src/inc/signature/start.php');


require HANDYSIGNATUR_PLUGIN_DIR .  '/src/update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://www.handysignatur-after-submit.at/updater/info.json',
	__FILE__, //Full path to the main plugin file or functions.php.
	'HandysignaturAfterSubmitReload'
);