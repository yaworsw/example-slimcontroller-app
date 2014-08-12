<?php

return array(
    'development' => array(
        'driver'   => 'sqlite',
        'database' => APP_PATH . '/data/development_db.sqlite3'
    ),
    'production' => array(
        'driver'   => 'sqlite',
        'database' => APP_PATH . '/data/production_db.sqlite3'
    ),
    'test' => array(
        'driver'   => 'sqlite',
        'database' => APP_PATH . '/data/test_db.sqlite3'
    )
);
