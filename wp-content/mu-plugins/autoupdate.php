<?php

/**
 * Plugin Name: Disable Auto-updating of Wordpress Plugins and Themes
 * Version:     1.0.0
 * Author:      Ragtag
 * Author URI:  https://ragtag.org
 *
 * @package RagtagAutoUpdateWordpress
 */

add_filter( 'auto_update_plugin', '__return_false' );
add_filter( 'auto_update_theme', '__return_false' );
