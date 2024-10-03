<?php
/**
 * Plugin Name:     Event Manager
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     PLUGIN DESCRIPTION HERE
 * Author:          YOUR NAME HERE
 * Author URI:      YOUR SITE HERE
 * Text Domain:     event-manager
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Event_Manager
 */

defined('ABSPATH') or die('No script kiddies please!');

require_once plugin_dir_path(__FILE__) . 'inc/hooks.php';
require_once plugin_dir_path(__FILE__) . 'inc/custom-post-type.php';
require_once plugin_dir_path(__FILE__) . 'inc/meta-boxes.php';
require_once plugin_dir_path(__FILE__) . 'inc/admin-columns.php';
require_once plugin_dir_path(__FILE__) . 'inc/front-end.php';
require_once plugin_dir_path(__FILE__) . 'inc/notifications.php';
require_once plugin_dir_path(__FILE__) . 'inc/rest-api.php';
require_once plugin_dir_path(__FILE__) . 'inc/search-filter.php';
require_once plugin_dir_path(__FILE__) . 'inc/localization.php';
require_once plugin_dir_path(__FILE__) . 'inc/security.php';

