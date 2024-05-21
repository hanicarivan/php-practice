<!--HTML DOCUMENT-->
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Page Title</title>
</head>

<body>
    <form name="forma" method="POST" action="skripta.php">
        <label for="grad">Grad:</label>
        <br>
        <input name="grad" type="text" required />
        <br>
        <label for="pBroj">Poštanski broj:</label>
        <br>
        <input name="pBroj" type="number" required />
        <br>
        <label for="zup">Županija:</label>
        <br>
        <input name="zup" type="text" required />
        <br>
        <br>
        <input name="submit" type="submit" value="Pošalji" />
    </form>
</body>

</html>
<!--SCRIPT DOCUMENT-->
<?php
$dbc = mysqli_connect('localhost', 'root', '', 'korisnik') or
    die('Error connecting' . mysqli_connect_error());

if (array_key_exists('submit', $_POST)) {
    $grad = $_POST['grad'];
    $pBroj = $_POST['pBroj'];
    $zup = $_POST['zup'];
    $query = "INSERT INTO mjesto (grad, pBroj, zupanija)
                          VALUES ('$grad', '$pBroj', '$zup')";
    $result = mysqli_query($dbc, $query) or die(mysqli_connect_error());
}
?>