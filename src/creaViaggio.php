<html>
    <title>Inserimento Viaggio</title>
    <head>
        <h1>Inserimento Viaggio</h1>
        <p><a href="index.php"> Torna in homepage</a></p>
    </head>
    <body>
        
        <!--  le variabili vengono passate al file php in action con il metodo riportato (in questo caso post)-->
        <form action="actions/saveViaggio.php" method="post">
            <p>
                Luogo:<br>
                <input type="text" name="luogo">
            </p>

            <p>
                Descrizione:<br>
                <input type="text" name="descrizione">
            </p>

            <p>
                Data:<br>
                <input type="date" name="data">
            </p>

            <p>
                ID nazione:<br>
                <input type="number" name="idnazione">
            </p>

            <p>
                <input type="submit" value="Invia">
            </p>
        </form>

    </body>
</html>