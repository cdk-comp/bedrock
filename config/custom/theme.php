<?php
// set default theme
if (env('CDK_THEME') && is_dir(define('CONTENT_DIR') . '/themes/' . env('CDK_THEME'))) {
    define('WP_DEFAULT_THEME', env('CDK_THEME'));
}
