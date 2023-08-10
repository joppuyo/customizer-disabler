# Disable Customizer

Contributors: joppuyo, peterdog, parallelus, pmgllc
Tags: disable, customizer, customiser, remove, hide, disabler
Requires at least: 5.0
Tested up to: 6.3
Requires PHP: 7.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Stable Tag: 2.2.5

Completely disable Customizer on your WordPress site.

## Description

Disable Customizer lets you completely disable Customizer on your WordPress site. This is useful in cases where you develop custom sites or themes that don't use Customizer. Removing the extra "Customize" button that doesn't actually do anything useful simplifies the WordPress admin user experience.

The code is based on [Customizer Remove All Parts](https://github.com/parallelus/customizer-remove-all-parts) by Jesse Petersen and Andy Wilkerson.

### Improvements compared to the original plugin

* I've added automated tests that ensure plugin works in new versions of WordPress and PHP.
* With the help of the automated tests, I've tested that the plugin works in WordPress 5.0 and later. The original plugin was only tested up to WordPress 4.4.
* The automated tests also ensure that the plugin works in PHP 7 and 8. The original plugin was only tested with PHP 5.
* Customizer Remove All Parts was removed from the plugin directory due to being "unused", presumably since it hasn't been updated in 5 years. Disable Customizer is available in the plugin directory so it can be easily installed and kept up to date

In the process, I've dropped support for old versions of WordPress and PHP. I would have liked the continue supporting these but supporting a very wide range of WordPress and PHP versions becomes increasingly difficult. The upside is that since the tests are automated, I can be very certain that the versions claim to be supported are actually so. According to [wordpress.org statistics](https://wordpress.org/about/stats/) WordPress 5.0 and PHP 7 should cover around 90% of WordPress users.

### Support the plugin

Maintaining a WordPress plugin is a lot of work. If you like the plugin, please consider rating it on [WordPress.org](https://wordpress.org/support/plugin/customizer-disabler/reviews/#new-post). Thank you!

If you are interested, you can also check out my other WordPress plugins:

* [Disable Media Pages](https://wordpress.org/plugins/disable-media-pages/)
* [Disable Drop Cap](https://wordpress.org/plugins/disable-drop-cap/)
* [ACF Image Aspect Ratio Crop](https://wordpress.org/plugins/acf-image-aspect-ratio-crop/)

## Installation

1. Install the plugin.
2. Activate the plugin via the plugins admin page.
3. There's no step three. Activating the plugin disables Customizer automatically.

## Frequently Asked Questions

### Is there a GitHub repo?

Yes, you can find the plugin on GitHub [here](https://github.com/joppuyo/customizer-disabler).

## Changelog

### 2.2.5 (2023‐08‐10)
* Fix: Test in WP 6.3

### 2.2.4 (2022-11-09)
* Fix: Test in WP 6.1

### 2.2.3 (2022-05-28)
* Fix: Test in WP 6.0

### 2.2.2 (2022-01-28)
* Fix: Bump supported WordPress version to 5.9

### 2.2.1 (2021-12-26)
* Fix: Update readme

### 2.2.0 (2021-12-25)
* Feature: Add a namespace to the class to prevent potential conflicts
* Feature: New and improved icon

### 2.1.0 (2021-12-07)
* Feature: add icon

### 2.0.0 (2021-12-07)
* Breaking change: change plugin slug to `customizer-disabler` instead of `disable-customizer` since the latter is already in use to comply with wordpress.org requirements
* Feature: Release on wordpress.org
* Feature: Remove update checker

### 1.1.0 (2021-10-03)
* Feature: Add update checker
* Fix: Delete unnecessary files from archive

### 1.0.0 (2021-02-02)
* Initial release
