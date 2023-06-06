<?php
    $server = "localhost";
    $username = "root";
    $pass = "";
    $db = "pet_shop";

    $dsn = "mysql:host=$server;dbname=$db;charset=UTF8";
    $pdo = new PDO($dsn, $username, $pass);

    if (!$pdo){
        echo "connection error";
    }
?>