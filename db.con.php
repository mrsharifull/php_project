<?php
    define("HOST", "localhost");
    define("USER", "root");
    define("PASSWORD", "");
    define("DATABASE", "php_test");
    $connect = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
    if (!$connect) {
        die('Database connection failed' . mysqli_connect_error());
    }
?>