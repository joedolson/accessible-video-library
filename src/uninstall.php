<?php
/**
 * Uninstall Accessible Video Library.
 *
 * @category Core
 * @package  Accessible Video Library
 * @author   Joe Dolson
 * @license  GPLv2 or later
 * @link     https://www.joedolson.com/accessible-video-library/
 */

if ( ! defined( 'ABSPATH' ) && ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit();
} else {
	delete_option( 'avl_fields' );
	delete_option( 'avl_default_caption' );
	delete_option( 'avl_responsive' );
}
