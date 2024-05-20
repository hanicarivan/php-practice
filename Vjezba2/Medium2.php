<!DOCTYPE html>
<html lang="en">

<head>
    <title>PWA vježba</title>
    <meta charset="UTF-8" />
</head>

<body style="<?php if (isset($_POST['option']) && isset($_POST['boja'])) {
                    echo "background-color: {$_POST['boja']}";
                } ?>">
    <form method="post" action="skripta.php">
        Odaberite željenu boju:
        <hr style="height: 2px; background-color:black;">
        <input type="color" name="boja" />
        <hr style="height: 2px; background-color:black;">
        Potvrdite želite li promjeniti boju:
        <br>
        <label><input type="checkbox" name="option" value="Option">Želim napraviti promjenu</label>
        <hr style="height: 2px; background-color:black;">
        <input type="submit" name="submit" value="Promjeni" style="padding: 5px; color: white; background-color: black; border-radius: 5px" />
    </form>

</body>

</html>