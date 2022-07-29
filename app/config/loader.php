<?php

use Phalcon\Loader;

$loader = new Loader();

/**
 * Register Namespaces
 */
$loader->registerNamespaces([
    'Litlecms\Models' => APP_PATH . '/common/models/',
    'Litlecms'        => APP_PATH . '/common/library/',
]);

/**
 * Register module classes
 */
$loader->registerClasses([
    'Litlecms\Modules\Frontend\Module' => APP_PATH . '/modules/frontend/Module.php',
    'Litlecms\Modules\Cli\Module'      => APP_PATH . '/modules/cli/Module.php',
    'Litlecms\Modules\Backend\Module'      => APP_PATH . '/modules/backend/Module.php'
]);

$loader->register();
