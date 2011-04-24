<?php
// Set error reporting pretty high
error_reporting(E_ALL | E_STRICT);

// Get base, application and tests path
define('BASE_PATH',  dirname(dirname(__FILE__)));
define('TESTS_PATH', BASE_PATH . '/tests');

// Define filters for clover report
PHPUnit_Util_Filter::addDirectoryToFilter(BASE_PATH . '/tests');
PHPUnit_Util_Filter::addDirectoryToWhitelist(BASE_PATH . '/library', '.php');

// Set include path
$includePath = BASE_PATH . '/library' . PATH_SEPARATOR
             . get_include_path();

set_include_path($includePath);
