<?php

require 'vendor/autoload.php';

use Aldavigdis\WpTestsStrapon\Bootstrap;
use Aldavigdis\WpTestsStrapon\FetchWP;

if (getenv('WP_VERSION') === false) {
    putenv('WP_VERSION=master');
}

if (defined('WP_TESTS_CONFIG_FILE_PATH') === false) {
    define(
        'WP_TESTS_CONFIG_FILE_PATH',
        Aldavigdis\WpTestsStrapon\Config::path()
    );
}

Bootstrap::init(getenv('WP_VERSION'));

require FetchWP::extractDirPath() . 'wordpress-develop-trunk/tests/phpunit/includes/functions.php';

require FetchWP::extractDirPath() . 'wordpress-develop-trunk/tests/phpunit/includes/bootstrap.php';
