<!DOCTYPE html>
<html>

<head></head>

<body>
    <form method="post" action="skripta.php">
        Odaberite boju: <br />
        <input type="color" name="boja" />
        <br>
        <input type="checkbox" name="checkbox">
        <br>
        <input type="submit" name="submit" value="Pošalji" />
    </form>

    <?php
    if (isset($_POST['checkbox'])) {
        $boja = $_POST['boja'];
        echo $boja;
    }
    ?>
</body>