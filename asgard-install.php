<?php
require_once 'paths.php';
require _CORE_DIR_.'core.php';
\Asgard\Core\App::loadDefaultApp();

\Asgard\Utils\FileManager::copy(__DIR__.'/app/page', _DIR_.'app/page');
\Asgard\Utils\FileManager::copy(__DIR__.'/tests/PageAdminTest.php', _DIR_.'tests/PageAdminTest.php');
\Asgard\Utils\FileManager::copy(__DIR__.'/web/page', _DIR_.'web/page');

\Asgard\Orm\ORMManager::addMigrationFile(__DIR__.'/migrations/Page.php');
\Asgard\Orm\ORMManager::migrate('Page');
