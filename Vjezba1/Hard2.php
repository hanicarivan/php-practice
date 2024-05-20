<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
</head>

<body>
    <form name="forma" method="POST" action="skripta.php">
        <label for="omiljenoVoce">Upišite vaše omiljeno voće:</label><br>
        <input type="text" name="omiljenoVoce"><br>
        <input type="submit" value="Pošalji">
    </form>
</body>

</html>


<!--SCRIPT DOCUMENT -->
<?php
$voce = $_POST['omiljenoVoce'];
$voce = strtolower($voce);

if ($voce == "ananas") {
    echo "Vaše omiljeno voće ima 56 kalorija";
} elseif ($voce == "banana") {
    echo "Vaše omiljeno voće ima 99 kalorija";
} elseif ($voce == "jabuka") {
    echo "Vaše omiljeno voće ima 52 kalorija";
} else {
    echo "Ne znamo koliko Vaše omiljeno voće ima kalorija";
}
?>