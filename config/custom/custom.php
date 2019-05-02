<?php
/**
 * Custom Configuration overrides
 */

use Roots\WPConfig\Config;

// Define CDK_CUSTOM for true
Config::define('CDK_CUSTOM', true);
// Changing the Number of Revisions to Save for Posts
Config::define('WP_POST_REVISIONS', 3);
// Change the Autosave Interval
Config::define('AUTOSAVE_INTERVAL', 86400);
// Increasing the PHP Memory Limit
Config::define('WP_MEMORY_LIMIT', env('CDK_MEMORY'));
// Increase Wordpress Memory Limit
Config::define('WP_MAX_MEMORY_LIMIT', env('CDK_MEMORY'));
// Enabling the "Trash" Feature for Media Files
Config::define('MEDIA_TRASH', true);
// The length of days before items are permanently delete
Config::define('EMPTY_TRASH_DAYS', 10);
// Disable WordPress cron
Config::define('DISABLE_WP_CRON', true);
// Define Google Tag Manager ID
Config::define('WP_GTM', env('WP_GTM'));
// Define WPMS settings
Config::define('WPMS_ON', env('WPMS_ON') ?: false);
Config::define('WPMS_SMTP_PASS', env('WPMS_SMTP_PASS') ?: false);
// Define WP Rocket license
Config::define('WP_ROCKET_EMAIL', env('WP_ROCKET_EMAIL'));
Config::define('WP_ROCKET_KEY', env('WP_ROCKET_KEY'));
// Define Elementor Pro license
Config::define('CDK_ELEMENTOR_PRO', env('CDK_ELEMENTOR_PRO'));
// Define Advanced Custom Fields Pro license
Config::define('CDK_ACF_PRO', env('CDK_ACF_PRO'));
