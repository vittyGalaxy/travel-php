<?php
    require "functions.php";

    $a = 2;
    $b = 3;

    $host = "mysql";
    $user = "dev";
    $password = "devpass";
    $database = "esercizi";

    $conn = new mysqli($host, $user, $password, $database);

    if ($conn->connect_error) {
        die("Connessione fallita: " . $conn->connect_error);
    }

    echo "Connessione avvenuta con successo";
?>



<DOCTYPE html>
<html>
    <head>
        <title>Test PHP</title>
    </head>
    <body>
        <h1>Test page</h1>

        <?php
            echo "<h1> The sum is: ".sum($a, $b)."</h1>";

            $numbers = [1, 2, 3, 4, 5];
            foreach ($numbers as $num){
                echo "<h2>".$num."</h2>";
            }
        ?>
    </body>
</html>