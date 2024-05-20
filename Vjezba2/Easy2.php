<!DOCTYPE html>
<html lang="en">

<head>
    <title>PWA vježba</title>
    <meta charset="UTF-8" />
    <?php
    echo date("H-i-s");
    echo "</br>";
    $sati = date("H");
    if ($sati <= 15) {
        echo "Nalazimo se u prvoj četvrtini sata";
    } elseif ($sati <= 30) {
        echo "Nalazimo se u drugoj četvrtini sata";
    } elseif ($sati <= 45) {
        echo "Nalazimo se u trecoj četvrtini sata";
    } else {
        echo "Nalazimo se u četvrtoj četvrtini sata";
    }
    ?>
</head>

<body style="font-size: 45px;">
</body>

</html>