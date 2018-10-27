<?php
/**
 * Plugin Name: CustomBlock
 * Description: This is a gutenberg Custom Block Plugin
 * Author: Author_Name
 * Author URI: https://wordpress.com
 * Version: 0.0.1
 * License: GPL2+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function newBlock_script() {
	wp_enqueue_script(
		'newBlockHandle', plugins_url( 'block.js', __FILE__ ), array( 'wp-blocks', 'wp-i18n', 'wp-element' ), filemtime( plugin_dir_path( __FILE__ ) . 'block.js' ) 
	);
}
add_action( 'enqueue_block_editor_assets', 'newBlock_script' );
