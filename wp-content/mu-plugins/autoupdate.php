<?php

/**
 * Plugin Name: Auto-update Wordpress, Plugins and Themes
 * Version:     1.0.0
 * Author:      Ragtag
 * Author URI:  https://ragtag.org
 *
 * @package RagtagAutoUpdateWordpress
 */

add_filter( 'automatic_updates_is_vcs_checkout', '__return_false', 1 ); // Allows auto updates even in a version-controlled environment
add_filter( 'allow_dev_auto_core_updates', '__return_true' );           // Enable development updates
add_filter( 'allow_minor_auto_core_updates', '__return_true' );         // Enable minor updates
add_filter( 'allow_major_auto_core_updates', '__return_true' );         // Enable major updates
add_filter( 'auto_update_plugin', '__return_true' );
add_filter( 'auto_update_theme', '__return_true' );
