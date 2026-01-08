<?php

use Illuminate\Support\Str;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Database Connection
    |--------------------------------------------------------------------------
    |
    | Central is the default connection.
    |
    */

    'default' => env('DB_CONNECTION', 'central'),

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    */

    'connections' => [

        /*
        |--------------------------------------------------
        | Central Database (SaaS Core)
        |--------------------------------------------------
        */
        'central' => [
            'driver' => 'mysql',
            'host' => env('DB_CENTRAL_HOST', '127.0.0.1'),
            'port' => env('DB_CENTRAL_PORT', '3306'),
            'database' => env('DB_CENTRAL_DATABASE', 'cgbod_central'),
            'username' => env('DB_CENTRAL_USERNAME', 'root'),
            'password' => env('DB_CENTRAL_PASSWORD', ''),
            'unix_socket' => env('DB_CENTRAL_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'strict' => true,
            'engine' => null,
        ],

        /*
        |--------------------------------------------------
        | Tenant Database (Dynamic – per client)
        |--------------------------------------------------
        */
        'tenant' => [
            'driver' => 'mysql',
            'host' => env('DB_TENANT_HOST', '127.0.0.1'),
            'port' => env('DB_TENANT_PORT', '3306'),
            'database' => null, // set dynamically at runtime
            'username' => env('DB_TENANT_USERNAME', 'root'),
            'password' => env('DB_TENANT_PASSWORD', ''),
            'unix_socket' => env('DB_TENANT_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'strict' => true,
            'engine' => null,
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Migration Repository Table
    |--------------------------------------------------------------------------
    */

    'migrations' => [
        'table' => 'migrations',
        'update_date_on_publish' => false,
    ],

    /*
    |--------------------------------------------------------------------------
    | Redis Databases
    |--------------------------------------------------------------------------
    */

    'redis' => [

        'client' => env('REDIS_CLIENT', 'phpredis'),

        'options' => [
            'cluster' => env('REDIS_CLUSTER', 'redis'),
            'prefix' => env(
                'REDIS_PREFIX',
                Str::slug(env('APP_NAME', 'laravel'), '_') . '_database_'
            ),
        ],

        'default' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'password' => env('REDIS_PASSWORD'),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_DB', '0'),
        ],

        'cache' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'password' => env('REDIS_PASSWORD'),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_CACHE_DB', '1'),
        ],

    ],

];
