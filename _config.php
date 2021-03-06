<?php

use SilverStripe\Forms\HTMLEditor\TinyMCEConfig;

define('ASSET_ADMIN_PATH', __DIR__);
define('ASSET_ADMIN_DIR', basename(__DIR__));

// Re-enable media dialog
$config = TinyMCEConfig::get('cms');
$config->enablePlugins([
    'ssmedia' => ASSET_ADMIN_DIR . '/client/dist/js/TinyMCE_ssmedia.js',
    'ssembed' => ASSET_ADMIN_DIR . '/client/dist/js/TinyMCE_ssembed.js'
]);
$config->insertButtonsAfter('table', 'ssmedia');
$config->insertButtonsAfter('ssmedia', 'ssembed');
