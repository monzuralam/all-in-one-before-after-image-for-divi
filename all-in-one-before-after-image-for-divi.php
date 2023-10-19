<?php
/*
Plugin Name: All In One Before After Image For Divi
Plugin URI:  
Description: All in One Before After Image for Divi helps to create awesome before after image in WordPress.
Version:     1.0.0
Author:      Monzur Alam
Author URI:  https://profiles.wordpress.org/monzuralam
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: aiobai-all-in-one-before-after-image-for-divi
Domain Path: /languages

All In One Before After Image For Divi is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

All In One Before After Image For Divi is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with All In One Before After Image For Divi. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
*/


if ( ! function_exists( 'aiobai_initialize_extension' ) ):
/**
 * Creates the extension's main class instance.
 *
 * @since 1.0.0
 */
function aiobai_initialize_extension() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/AllInOneBeforeAfterImageForDivi.php';
}
add_action( 'divi_extensions_init', 'aiobai_initialize_extension' );
endif;
