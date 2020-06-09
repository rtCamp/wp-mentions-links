<?php
/**
 * Plugin Name: WP Mentions Links
 * Description: Gutenberg autocomplete for posts and users.
 * Plugin URI:  https://rtcamp.com
 * Author:      rtCamp
 * Author URI:  https://rtcamp.com
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Version:     1.0
 * Text Domain: wp-mentions-links
 *
 * @package wp-mentions-links
 */

define( 'WP_MENTIONS_LINKS_PATH', untrailingslashit( plugin_dir_path( __FILE__ ) ) );
define( 'WP_MENTIONS_LINKS_URL', untrailingslashit( plugin_dir_url( __FILE__ ) ) );

// phpcs:disable WordPressVIPMinimum.Files.IncludingFile.UsingCustomConstant
require_once WP_MENTIONS_LINKS_PATH . '/inc/helpers/autoloader.php';
// phpcs:enable WordPressVIPMinimum.Files.IncludingFile.UsingCustomConstant

// Defining settings constants.
define( 'WP_MENTIONS_LINKS_PLUGIN_SLUG', 'wp-mentions-links' );
define( 'WP_MENTIONS_LINKS_FIELD_SETTING_NAME', 'wpml_user_field_to_use' );
define( 'WP_MENTIONS_LINKS_ENABLED_CPTS_SETTING_NAME', 'wpml_enabled_cpts' );

/**
 * To load plugin manifest class.
 *
 * @return void
 */
function wp_mentions_links_plugin_loader() {
	\WP_Mentions_Links\Inc\Plugin::get_instance();
}

wp_mentions_links_plugin_loader();