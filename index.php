<?php

/* https://github.com/zfcampus/zf-console */
use Zend\Console\Console;
use ZF\Console\Application;
use ZF\Console\Dispatcher;

require_once __DIR__ . '/vendor/autoload.php'; // Composer autoloader

define('VERSION', '1.1.3');

$dispatcher = new Dispatcher();
$dispatcher->map('self-update', new SelfUpdate($version));
$dispatcher->map('build', 'My\Build');

$application = new Application(
    'Builder',
    VERSION,
    include __DIR__ . '/config/routes.php',
    Console::getInstance(),
    $dispatcher
);
$exit = $application->run();
exit($exit);