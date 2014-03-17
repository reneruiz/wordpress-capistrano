<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package assetserv
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function assetserv_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'assetserv_jetpack_setup' );
