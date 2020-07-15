<?php

return
    [
        'paths' => [
            'migrations' => './migrations',
            'seeds' => './seeds',
        ],
        'environments' => [
            'default_database' => 'censornet',
            'censornet' => [
                'adapter' => 'pgsql',
                'host' => 'censornet_db_1',
                'name' => 'censornet',
                'user' => 'postgres',
                'pass' => 'postgres',
                'port' => 5432,
                'charset' => 'utf8',
                'collation' => 'utf8_unicode_ci',
            ],
            'version_order' => 'execution',
        ],
    ];
