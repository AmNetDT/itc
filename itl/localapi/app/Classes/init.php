<?php

    $GLOBALS ['config'] = ['pgsql' => ['host' => 'localhost',
    'username' => 'postgres',
    'password' => '@admin123',
    'db' => 'postgres']];

require(file_exists('vendor/autoload.php')) ? 'vendor/autoload.php' : '../../vendor/autoload.php';
