<?php

    define('HOST', '127.0.0.1');
    define('USER', 'root');
    define('PASSWORD', 'bismillah');
    define('DATABASE', 'data');

    $connection = mysqli_connect( HOST, USER, PASSWORD, DATABASE) or die('unable connect');
?>