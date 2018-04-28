<?php
/** Multisite */

/**
 * Cookie settings
 *
 * Resolving The WordPress Multisite Redirect Loop
 *
 * @link https://tommcfarlin.com/resolving-the-wordpress-multisite-redirect-loop/
 */
if (filter_var(env('WP_MULTISITE_SUBDOMAIN_INSTALL'), FILTER_VALIDATE_BOOLEAN)) {
    define('COOKIE_DOMAIN', $domain);
    define('ADMIN_COOKIE_PATH', '/');
}

define( 'WP_ALLOW_MULTISITE', env('WP_ALLOW_MULTISITE') );
define('MULTISITE', env('WP_MULTISITE'));
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', env('CDK_HOST'));
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);
