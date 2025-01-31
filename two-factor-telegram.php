<?php

/**
 * Plugin Name: WP 2FA Telegram
 * Plugin URI: https://sovichetra.com
 * Description: This plugin enables two factor authentication with Telegram by increasing your website security and sends an alert every time a wrong login occurs.
 * Version: 3.2
 * Requires at least: 6.0
 * Tested up to: 6.7
 * Requires PHP: 7.0
 * Author: Chetra Chann, dueclic
 * Author URI: https://sovichetra.com
 * Text Domain: two-factor-login-telegram
 * License: GPLv3
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */

__(
    'This plugin enables two factor authentication with Telegram by increasing your website security and sends an alert every time a wrong login occurs.',
    'two-factor-login-telegram'
);

error_reporting(E_ERROR);

if ( ! defined('ABSPATH')) {
    die;
}

define('WP_FACTOR_PLUGIN_VERSION', '3.1');

define('WP_FACTOR_AUTHCODE_EXPIRE_SECONDS', 60 * 20);

/**
 *
 * Full path to the WP Two Factor Telegram File
 *
 */

define('WP_FACTOR_TG_FILE', __FILE__);

define('WP_FACTOR_TG_GETME_TRANSIENT', 'tg_wp_factor_valid_bot');

/**
 *
 * The main plugin class
 *
 */

require_once("includes/class-wp-factor-telegram-plugin.php");

function WFT()
{
    return WP_Factor_Telegram_Plugin::get_instance();
}

WFT();

