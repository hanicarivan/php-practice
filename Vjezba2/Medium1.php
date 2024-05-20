<!DOCTYPE html>
<html lang="en">

<head>
    <title>PWA vježba</title>
    <meta charset="UTF-8" />
    <?php
    echo date("d-m-Y");
    echo "</br>";
    $dan = date("d");
    if ($dan % 2) {
        echo "\$dan je neparni";
    } else {
        echo "\$dan je parni";
    }
    ?>
</head>

<body style="font-size: 45px;">
</body>

</html>