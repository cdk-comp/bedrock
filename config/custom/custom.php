<?php
/**
 * Custom Configuration overrides
 */

use Roots\WPConfig\Config;

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
