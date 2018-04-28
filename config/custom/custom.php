<?php
/** Custom */
define( 'WP_POST_REVISIONS', 3 );
define('AUTOSAVE_INTERVAL', 86400);

define('WP_MEMORY_LIMIT', env('CDK_MEMORY'));
define('WP_MAX_MEMORY_LIMIT', env('CDK_MEMORY'));

define( 'MEDIA_TRASH', true );
define( 'EMPTY_TRASH_DAYS', 10 );
