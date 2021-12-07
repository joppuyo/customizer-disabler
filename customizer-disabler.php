<?php

// SPDX-License-Identifier: GPL-2.0-or-later
// SPDX-FileCopyrightText: 2021 Johannes Siipola
// SPDX-FileCopyrightText: 2015 Jesse Petersen and Andy Wilkerson

/*
 * Plugin name: Disable Customizer
 * Description: Completely turn off customizer on your site
 * Version: 2.0.0
 * Author: Johannes Siipola
 * Author URI: https://siipo.la
 * Text Domain: customizer-disabler
 */

if (!defined('ABSPATH')) {
	exit();
}

require __DIR__ . '/vendor/autoload.php';

/* Based on Customizer Remove All Parts plugin
 * (https://github.com/parallelus/customizer-remove-all-parts) by
 * Jesse Petersen and Andy Wilkerson, licensed under GNU GPLv2 or later
 */

class DisableCustomizer
{
	public function __construct()
	{
		add_action('init', [$this, 'init'], 10);
		add_action('admin_init', [$this, 'admin_init'], 10);
	}

	public function init()
	{
		add_filter(
			'map_meta_cap',
			[$this, 'remove_customize_capability'],
			10,
			4
		);
	}

	public function admin_init()
	{
		remove_action('plugins_loaded', '_wp_customize_include', 10);
		remove_action(
			'admin_enqueue_scripts',
			'_wp_customize_loader_settings',
			11
		);

		add_action('load-customize.php', [
			$this,
			'override_load_customizer_action',
		]);
	}

	public function remove_customize_capability(
		$caps = [],
		$cap = '',
		$user_id = 0,
		$args = []
	) {
		if ($cap == 'customize') {
			return ['nope'];
		}

		return $caps;
	}

	public function override_load_customizer_action()
	{
		wp_die(
			__('The Customizer is currently disabled.', 'customizer-disabler')
		);
	}

}

$disable_customizer = new DisableCustomizer();
