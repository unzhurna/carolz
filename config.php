<?php

    define('DB_HOST', 'localhost');

    if($_SERVER['SERVER_NAME'] == 'localhost')
    {
        define('DB_USER', 'root');
        define('DB_PASS', '');
        define('DB_NAME', 'dev_carols');
        define('DB_DRIVER', 'mysqli');
    }
    else
    {
        define('DB_USER', 'root');
        define('DB_PASS', 'Carols2017');
        define('DB_NAME', '');
        define('DB_DRIVER', 'mysqli');
    }
