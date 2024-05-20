<!DOCTYPE html>

<head>
    <title>PWA vježba</title>
    <meta charset="UTF-8" />
</head>

<body>
    <form method="post" action="skripta.php">
        Unesite dva broja: <br />
        a: <input type="text" name="br1" /><br />
        b: <input type="text" name="br2" /><br>
        <input type="submit" name="submit" value="Pošalji" />
    </form>
    <?php
    if (isset($_POST['br1']) && isset($_POST['br2'])) {
        $prvi = $_POST['br1'];
        $drugi = $_POST['br2'];
        function fun($prvi, $drugi)
        {
            for ($i = $prvi; $i <= $drugi; $i++) {
                echo "{$i} ";
            }
        }
        if (array_key_exists('submit', $_POST)) {
            fun($prvi, $drugi);
        }
    }
    ?>
</body>

</html>