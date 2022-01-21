<!--
SPDX-FileCopyrightText: 2021 Johannes Siipola
SPDX-License-Identifier: CC0-1.0
-->

# Disable Customizer

[![WordPress Plugin Version](https://img.shields.io/wordpress/plugin/v/customizer-disabler?logo=wordpress)](https://wordpress.org/plugins/customizer-disabler/)
![WordPress Plugin Required PHP Version](https://img.shields.io/wordpress/plugin/required-php/customizer-disabler)
![WordPress Plugin: Required WP Version](https://img.shields.io/wordpress/plugin/wp-version/customizer-disabler?logo=wordpress)
![WordPress Plugin: Tested WP Version](https://img.shields.io/wordpress/plugin/tested/customizer-disabler?logo=wordpress)
![GitHub Workflow Status](https://img.shields.io/github/workflow/status/joppuyo/customizer-disabler/Build?logo=github)
![GitHub Workflow Status](https://img.shields.io/github/workflow/status/joppuyo/customizer-disabler/Test?label=tests&logo=github)
[![Actively Maintained](https://img.shields.io/badge/Maintenance%20Level-Actively%20Maintained-green.svg)](https://gist.github.com/cheerfulstoic/d107229326a01ff0f333a1d3476e068d)
[![REUSE status](https://api.reuse.software/badge/github.com/joppuyo/customizer-disabler)](https://api.reuse.software/info/github.com/joppuyo/customizer-disabler)

Disable Customizer lets you completely disable Customizer on your WordPress site. This is useful in cases where you develop custom sites or themes that don't use Customizer. Removing the extra "Customize" button that doesn't actually do anything useful simplifies the WordPress admin user experience.

The code is based on [Customizer Remove All Parts](https://github.com/parallelus/customizer-remove-all-parts) by Jesse Petersen and Andy Wilkerson.

## Improvements compared to the original plugin

* I've added automated tests that ensure plugin works in new versions of WordPress and PHP.
* With the help of the automated tests, I've tested that the plugin works in WordPress 5.0 and later. The original plugin was only tested up to WordPress 4.4.
* The automated tests also ensure that the plugin works in PHP 7 and 8. The original plugin was only tested with PHP 5.
* Customizer Remove All Parts was removed from the plugin directory due to being "unused", presumably since it hasn't been updated in 5 years. Disable Customizer is available in the plugin directory so it can be easily installed and kept up to date

In the process, I've dropped support for old versions of WordPress and PHP. I would have liked the continue supporting these but supporting a very wide range of versions becomes increasingly difficult. The upside is that since the tests are automated, I can be very certain that the versions claim to be supported are actually so. According to [wordpress.org statistics](https://wordpress.org/about/stats/) WordPress 5.0 and PHP 7 should cover around 90% of WordPress users.

## Requirements

* WordPress 5.0 or later
* PHP 7.0 or later

## Installation

### WordPress plugin directory

The plugin [is available](https://wordpress.org/plugins/customizer-disabler/) in the WordPress plugin directory.

### Composer

The plugin can be installed using Composer using the [wpackagist.org](https://wpackagist.org/) repository.

```
composer require wpackagist-plugin/customizer-disabler
```

After the installation is done, simply activate the plugin to disable Customizer.

## Support the plugin

Maintaining a WordPress plugin is a lot of work. If you like the plugin, please consider rating it on [WordPress.org](https://wordpress.org/support/plugin/customizer-disabler/reviews/#new-post). Thank you!

If you are interested, you can also check out my other WordPress plugins:

* [Disable Media Pages](https://wordpress.org/plugins/disable-media-pages/)
* [Disable Drop Cap](https://wordpress.org/plugins/disable-drop-cap/)
* [ACF Image Aspect Ratio Crop](https://wordpress.org/plugins/acf-image-aspect-ratio-crop/)

## License

GPL v2 or later
