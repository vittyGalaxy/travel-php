<?php
    require "connection.php";

    $luogo          = $_POST["luogo"];
    $descrizione    = $_POST["descrizione"];
    $data           = $_POST["data"];
    $idnazione      = $_POST["idnazione"];

    $sql = "INSERT INTO Viaggio (luogo, descrizione, data_partenza, idnazione)
            VALUES ('$luogo', '$descrizione', '$data', '$idnazione')";

    if ($conn->query($sql) === TRUE) {
        echo "Viaggio inserito correttamente";
        echo "<p><a href="."../index.php"."> Torna in homepage</a></p>";
    } else {
        echo "Errore nel salvataggio";
    }

    $conn->close();
?>