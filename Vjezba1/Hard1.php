<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
</head>

<body>
    <h2>HTML Forma</h2>
    <form name="forma" method="POST" action="skripta.php">
        <textarea rows="10" cols="30" name="poslaniText">The cat was playing in the garden.</textarea>
        <br>
        <input type="submit" value="Pošalji">
    </form>
</body>

</html>

<!--SCRIPT DOCUMENT -->
<?php
$text = $_POST['poslaniText'];

echo "Tekst koji ste unijeli je <br> {$text}";
?>