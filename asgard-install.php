<?php
require_once 'paths.php';
require_once _VENDOR_DIR_.'autoload.php'; #composer autoloader
\Asgard\Core\App::loadDefaultApp();

\Asgard\Utils\FileManager::copy(__DIR__.'/app/page', _DIR_.'app/page');
\Asgard\Utils\FileManager::copy(__DIR__.'/tests/PageAdminTest.php', _DIR_.'tests/PageAdminTest.php');
\Asgard\Utils\FileManager::copy(__DIR__.'/web/page', _DIR_.'web/page');

\Asgard\Orm\Libs\MigrationsManager::addMigrationFile(__DIR__.'/migrations/Page.php');
\Asgard\Orm\Libs\MigrationsManager::migrate('Page');
