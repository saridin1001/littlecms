<?php

use Phalcon\Loader;

$loader = new Loader();

/**
 * Register Namespaces
 */
$loader->registerNamespaces([
    'Littlecms\Models' => APP_PATH . '/common/models/',
    'Littlecms'        => APP_PATH . '/common/library/',
]);

/**
 * Register module classes
 */
$loader->registerClasses([
    'Littlecms\Modules\Frontend\Module' => APP_PATH . '/modules/frontend/Module.php',
    'Littlecms\Modules\Cli\Module'      => APP_PATH . '/modules/cli/Module.php'
]);

$loader->register();
