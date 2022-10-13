<?php
$settings = [
    'dev_mode' => true,  // prod

    // Path where Doctrine will cache the processed metadata
    // when 'dev_mode' is false.
    'cache_dir' => __DIR__ . '/cache/doctrine',

    'socket' => [
        'host' => 'host',
        'port' => '6001'
    ],

    // The parameters Doctrine needs to connect to your database.
    // These parameters depend on the driver (for instance the 'pdo_sqlite' driver
    // needs a 'path' parameter and doesn't use most of the ones shown in this example).
    // Refer to the Doctrine documentation to see the full list
    // of valid parameters: https://www.doctrine-project.org/projects/doctrine-dbal/en/current/reference/configuration.html
    'db' => [
        'driver' => 'pdo_mysql',
        'host' => 'localhost',
        'port' => 3306,
        'dbname' => 'mydb',
        'user' => 'user',
        'password' => 'secret',
        'charset' => 'utf-8'
    ],
    'logger' => [
        'name' => 'app',
        'path' => __DIR__ . './logs',
        'filename' => 'app.log',
        'level' => \Monolog\Logger::DEBUG,
    ]
];
return $settings;