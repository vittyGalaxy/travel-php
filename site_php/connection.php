<?php
    $host = "127.0.0.1";
    $user = "dev";
    $database = "esercizi";
    $port = 3306;

    $conn = mysqli_connect($host, $username, $password, $database);

    if(!$conn) {
        die("Error: " . mysqli_connect_error());
    }