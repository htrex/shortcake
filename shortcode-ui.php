<?php
/**
 * Plugin Name: Shortcode UI
 * Version: 0.1-beta
 * Description: Interface for adding shortcodes.
 * Author: Human Made Limited
 * Author URI: http://hmn.md
 *
 * License: GPLv2 or later
 *
 *	Copyright (C) 2013 Dominik Schilling
 *
 *	This program is free software; you can redistribute it and/or
 *	modify it under the terms of the GNU General Public License
 *	as published by the Free Software Foundation; either version 2
 *	of the License, or (at your option) any later version.
 *
 *	This program is distributed in the hope that it will be useful,
 *	but WITHOUT ANY WARRANTY; without even the implied warranty of
 *	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *	GNU General Public License for more details.
 *
 *	You should have received a copy of the GNU General Public License
 *	along with this program; if not, write to the Free Software
 *	Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 */

require_once( 'inc/class-shortcode-ui.php' );

add_action( 'init', function() {
	$instance = Shortcode_UI::get_instance();
}, 5 );

/**
 * Register UI for Shortcode
 *
 * @param  string $shortcode_tag
 * @param  array  $args
 * @return null
 */
function shortcode_ui_register_for_shortcode( $shortcode_tag, $args = array() ) {
	Shortcode_UI::get_instance()->register_shortcode_ui( $shortcode_tag, $args );
}