<?php

require __DIR__.'/../vendor/autoload.php';

use Doctrine\DBAL\Tools\Console\ConsoleRunner;

$config = new \Doctrine\DBAL\Configuration();

$connectionParams = include __DIR__.'/config.php';

$connection = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);

return ConsoleRunner::createHelperSet($connection);
