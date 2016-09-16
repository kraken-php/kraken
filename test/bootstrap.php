<?php

require __DIR__.'/../vendor/autoload.php';

if (!defined('PHPUNIT_COMPOSER_INSTALL'))
{
    define('PHPUNIT_COMPOSER_INSTALL', __DIR__ . '/../vendor/autoload.php');
}

/**
 * @see data/autorun/autorun.php5.polyfill
 */
if (!class_exists('Error'))
{
    class Error extends Exception
    {}
}

date_default_timezone_set('UTC');
