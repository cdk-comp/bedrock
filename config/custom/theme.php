<?php
// set default theme
if (env('CDK_THEME') && is_dir(WP_CONTENT_DIR . '/themes/' . env('CDK_THEME'))) {
    define('WP_DEFAULT_THEME', env('CDK_THEME'));
}
