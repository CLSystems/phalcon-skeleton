<?php

use Phalcon\Config;

return new Config(
    [
        'database'    => [
            'adapter'  => 'Mysql',
            'host'     => 'localhost',
            'username' => 'root',
            'password' => '0wn4G377!',
            'dbname'   => 'kortact_new',
        ],
        'application' => [
            'controllersDir' => __DIR__ . '/../controllers/',
            'modelsDir'      => __DIR__ . '/../models/',
            'viewsDir'       => __DIR__ . '/../views/',
            'libraryDir'     => __DIR__ . '/../library/',
            'pluginsDir'     => __DIR__ . '/../plugin/',
            'baseUri'        => '/'
        ]
    ]
);
