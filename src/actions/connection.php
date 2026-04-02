<?php
    $host = "172.17.0.1";
    $user = "dev";
    $password = "devpass";
    $database = "esercizi";
    $port = 3306;

    $conn = new mysqli($host, $user, $password, $database, $port);

    if ($conn->connect_error) {
        die("Connessione fallita: " . $conn->connect_error);
    }
?>
