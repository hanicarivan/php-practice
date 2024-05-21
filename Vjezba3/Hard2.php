<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Page Title</title>
    <?php
    $dbc = mysqli_connect('localhost', 'root', '', 'vjezba_3') or die('Error connecting' . mysqli_connect_error());
    $query = "SELECT id, ime, prezime FROM korisnik";
    $result = mysqli_query($dbc, $query);

    if (array_key_exists('submit', $_POST)) {
        $id_delete = $_POST['korisnik_id'];
        $exec = mysqli_query($dbc, "DELETE FROM korisnik WHERE id = $id_delete");
    }
    ?>
</head>

<body>
    <form name="forma" method="POST" action="forma.php">
        <?php
        if ($result) {
            echo "Odaberite podatak koji želite obrisati:<br>";
            echo "<select name='korisnik_id'>";
            while ($row = $result->fetch_assoc()) {
                $id = $row['id'];
                $ime = $row['ime'];
                $prezime = $row['prezime'];
                echo "<option value='$id'>$id - $ime $prezime</option>";
            }
            echo "</select><br>";
        } else {
            echo "Error";
        }
        ?>
        <input name="submit" type="submit" value="Pošalji" />
    </form>
</body>

</html>