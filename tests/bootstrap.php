<?php
// Set error reporting pretty high
error_reporting(E_ALL | E_STRICT);

// Get base, application and tests path
define('BASE_PATH',  dirname(__DIR__));
define('TESTS_PATH', __DIR__);

// Define filters for clover report
$filter = PHP_CodeCoverage_Filter::getInstance();
$filter->addDirectoryToBlacklist(TESTS_PATH);
$filter->addDirectoryToWhitelist(BASE_PATH . '/library', '.php');

// Load autoloader
require_once BASE_PATH . '/autoload_register.php';