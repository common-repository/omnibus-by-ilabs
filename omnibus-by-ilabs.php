<?php
/**
 * Plugin Name: Omnibus by iLabs
 * Description: Omnibus by iLabs is a plugin for WooCommerce that allows you to quickly and easily adapt your e-commerce to the EU Directive, i.e. the Omnibus Directive.
 * Version: 1.0.12
 * Author: iLabs LTD
 * Author URI: https://ilabs.dev/
 * Text Domain: omnibus-by-ilabs
 * Tested up to: 6.2.2
 * Requires at least: 5.1
 * Requires PHP: 7.2
 * Domain Path: /lang/
 *
 *
 * Copyright 2023 iLabs Ltd.
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly

use Ilabs\Omnibus_By_Ilabs\Plugin;

if ( PHP_VERSION_ID >= 70200 ) {
	require_once __DIR__ . '/vendor/autoload.php';
	require_once 'dependencies.php';

	function omnibus_by_ilabs(): Plugin {
		return new Plugin();
	}

	$config = [
		'__FILE__'    => __FILE__,
		'slug'        => 'omnibus_by_ilabs',
		'lang_dir'    => 'lang',
		'text_domain' => 'omnibus-by-ilabs'
	];
	omnibus_by_ilabs()->execute( $config );
} else {
	/**
	 * Old php
	 */
	add_action( 'admin_notices', function () {
		echo __( "<p><strong style='color: red;'>Omnibus by iLabs: PHP version is older than 7.2 so this plugin will not work. Please contact your host and ask them to upgrade. </strong></p>" );
	} );
}
