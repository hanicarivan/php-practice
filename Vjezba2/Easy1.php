<!DOCTYPE html>
<html lang="en">

<head>
    <title>PWA vježba</title>
    <meta charset="UTF-8" />
</head>

<body style="<?php if (isset($_POST['option']) && isset($_POST['fontsize'])) {
                    echo "font-size: {$_POST['fontsize']}px";
                } ?>">
    <form method="post" action="skripta.php">
        Željena veličina fonta:
        <br />
        <input type="text" name="fontsize" />
        <br>
        <label><input type="checkbox" name="option" value="Option">Želim napraviti promjenu</label>
        <br>
        <input type="submit" name="submit" value="Promjeni" />
    </form>
</body>

</html>