<?php
/**
 * Plugin Name:     Overblog Posts Styles
 * Plugin URI:      https://github.com/michaelperrin/wp-overblog-styles-plugin
 * Description:     A plugin that integrates styles for posts imported from OverBlog.
 * Author:          Michaël Perrin
 * Author URI:      http://www.michaelperrin.fr
 * Text Domain:     overblog-posts-styles
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Overblog_Posts_Styles
 */

function overblog_post_styles_register_assets()
{
	wp_enqueue_style(
		'overblog_post_styles_register',
		plugins_url('/css/overblog-posts-styles.css', __FILE__)
	);
}

add_action('wp_enqueue_scripts', 'overblog_post_styles_register_assets');
