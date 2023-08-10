<?php

// SPDX-License-Identifier: GPL-2.0-or-later
// SPDX-FileCopyrightText: 2021 Johannes Siipola

/*
 * Plugin name: Disable Customizer
 * Description: Completely turn off customizer on your site
 * Version: 2.2.5
 * Author: Johannes Siipola
 * Author URI: https://siipo.la
 * Text Domain: customizer-disabler
 */

use NPX\DisableCustomizer\DisableCustomizer;

if (!defined('ABSPATH')) {
    exit();
}

require __DIR__ . '/vendor/autoload.php';

DisableCustomizer::get_instance();
