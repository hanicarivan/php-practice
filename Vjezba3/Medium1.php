<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Page Title</title>
    <?php
    $dbc = mysqli_connect('localhost', 'root', '', 'korisnik') or
        die('Error connecting' . mysqli_connect_error());

    if (array_key_exists('submit', $_POST)) {
        $ime = $_POST['ime'];
        $prezime = $_POST['prezime'];
        $jmbag = $_POST['jmbag'];
        $email = $_POST['mail'];
        $query = "INSERT INTO student (ime_studenta, prezime_studenta, JMBAG, e_mail)
                          VALUES ('$ime', '$prezime', '$jmbag', '$email')";
        $result = mysqli_query($dbc, $query) or die(mysqli_connect_error());
    }
    ?>
</head>

<body>
    <form name="forma" method="POST" action="forma.php">
        <label for="ime">Ime</label>
        <br />
        <input name="ime" type="text" required />
        <br />
        <label for="prezime">Prezime</label>
        <br />
        <input name="prezime" type="text" required />
        <br />
        <label for="jmbag">JMBAG</label>
        <br />
        <input name="jmbag" type="number" required />
        <br />
        <label for="mail">E-mail</label>
        <br />
        <input name="mail" type="email" required />
        <br />
        <input name="submit" type="submit" value="Pošalji" />
    </form>
</body>

</html>