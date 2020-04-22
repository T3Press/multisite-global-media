<?php # -*- coding: utf-8 -*-
/*
 * @noinspection PhpIncludeInspection
 * Because it necessary for tests.
 * phpcs:disable WordPress.PHP.DiscouragedPHPFunctions.runtime_configuration_putenv
 * phpcs:disable PSR1.Files.SideEffects.FoundWithSymbols
 */
declare(strict_types=1);

putenv('TESTS_PATH='.__DIR__);
putenv('LIBRARY_PATH='.dirname(__DIR__));

$vendor = dirname(__DIR__, 2).'/vendor/';
if (!realpath($vendor)) {
    die('Please install via Composer before running tests.');
}

if (!defined('PHPUNIT_COMPOSER_INSTALL')) {
    define('PHPUNIT_COMPOSER_INSTALL', $vendor.'autoload.php');
}

require_once $vendor.'brain/monkey/inc/patchwork-loader.php';
require_once $vendor.'autoload.php';
unset($vendor);
