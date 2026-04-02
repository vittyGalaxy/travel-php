<?php
    require "actions/connection.php";

    $sql = "SELECT * FROM Viaggio";
    $result = $conn->query($sql);
?>

<html>
    <title>Visualizza Viaggio</title>

    <head>
        <h1>Visualizza Viaggio</h1>
        <p><a href="index.php"> Torna in homepage</a></p>
    </head>
    <body>
        <table border="1">
            <tr>
                <th>ID Viaggio</th>
                <th>Luogo</th>
                <th>Descrizione</th>
                <th>Data</th>
                <th>ID Nazione</th>
            </tr>

            <?php
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["idviaggio"] . "</td>";
                    echo "<td>" . $row["luogo"] . "</td>";
                    echo "<td>" . $row["descrizione"] . "</td>";
                    echo "<td>" . $row["data_partenza"] . "</td>";
                    echo "<td>" . $row["idnazione"] . "</td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>