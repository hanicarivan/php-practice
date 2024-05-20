<!DOCTYPE html>

<head>
    <title>PWA vježba</title>
    <meta charset="UTF-8" />
</head>

<body>
    <form method="post" action="skripta.php">
        Upišite broj redaka:
        <br />
        <input type="text" name="br" />
        <hr style="height: 2px; background-color:black;">
        Upišite broj stupaca:
        <br>
        <input type="text" name="bs" />
        <hr style="height: 2px; background-color:black;">
        <input type="submit" name="submit" value="Napravi tablicu" style="padding: 5px; color: white; background-color: black; border-radius: 5px" />
    </form>
    <div style="text-align: center;">
        <?php
        if (isset($_POST['br']) && isset($_POST['bs'])) {
            $broj_redaka = $_POST['br'];
            $broj_stupaca = $_POST['bs'];
            function napravi_tablicu($broj_redaka, $broj_stupaca)
            {
                echo "<br><br>Ispis tablice:<br>";
                echo "<table style='margin: 0 auto'>";
                for ($i = 0; $i < $broj_redaka; $i++) {
                    echo "<tr style='height: 20px;>";
                    for ($j = 0; $j < $broj_stupaca; $j++) {
                        echo "<td style='width: 50px; border: 1px solid black; border-collapse: collapse'>";
                    }
                }
                echo "</table>";
            }
            if (array_key_exists('submit', $_POST)) {
                napravi_tablicu($broj_redaka, $broj_stupaca);
            }
        }
        ?>
    </div>
</body>

</html>