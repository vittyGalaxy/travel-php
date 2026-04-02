<?php
    require "actions/connection.php";

    $luogo = "";
    $result = null;
    $ricercaFatta = false;
    $sql = "SELECT * FROM Viaggio";

    if (!empty($_GET["luogo"])) {
        $luogo = $_GET["luogo"];
        $sql = "SELECT * FROM Viaggio WHERE luogo LIKE '%$luogo%'";
        $result = $conn->query($sql);
        $ricercaFatta = true;
    }
?>


<html>
    <head>
        <h1>Cerca Viaggio</h1>
        <p><a href="index.php"> Torna in homepage</a></p>
    </head>

    <body>
        <!-- form che passa a se stesso i valori tramite GET -->
        <form action="" method="get">
            <p>
                Luogo:<br>
                <input type="text" name="luogo" value="<?php echo $luogo; ?>">
            </p>

            <p>
                <input type="submit" value="Cerca">
            </p>
        </form>


        <?php
            if ($result != null) {
                echo "<table border='1'>";
                echo "<tr>";
                echo "<th>ID Viaggio</th>";
                echo "<th>Luogo</th>";
                echo "<th>Descrizione</th>";
                echo "<th>Data</th>";
                echo "<th>ID Nazione</th>";
                echo "</tr>";

                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["idviaggio"] . "</td>";
                    echo "<td>" . $row["luogo"] . "</td>";
                    echo "<td>" . $row["descrizione"] . "</td>";
                    echo "<td>" . $row["data_partenza"] . "</td>";
                    echo "<td>" . $row["idnazione"] . "</td>";
                    echo "</tr>";
                }

                echo "</table>";
            }
        ?>
    </body>
</html>