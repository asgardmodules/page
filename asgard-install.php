<?php
require __DIR__.'/../utils/FileManager.php';

\Asgard\Utils\FileManager::copy(__DIR__.'/app/page', 'app/page');
\Asgard\Utils\FileManager::copy(__DIR__.'/tests/PageAdminTest.php', 'tests/PageAdminTest.php');
\Asgard\Utils\FileManager::copy(__DIR__.'/web/page', 'web/page');