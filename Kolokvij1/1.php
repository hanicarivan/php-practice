<!DOCTYPE html>
<html>

<head>
    <?php
    echo date("D H:i");
    echo "<br>";
    $currSati = date("H");
    $currDan = date("D");
    $radniDan = array("Mon", "Tue", "Wed", "Thu", "Fri");

    function stanjeTrgovine($sati, $dan, $radniDani)
    {
        if ((($sati >= 8) && ($sati <= 16)) && (in_array($dan, $radniDani))) {
            echo "<p style='color: green'>Trgovina je otvorena</p>";
        } else {
            echo "<p style='color: red'>Trgovina je zatvorena</p>";
        }
    }
    stanjeTrgovine($currSati, $currDan, $radniDan);
    ?>
</head>

<body></body>

</html>