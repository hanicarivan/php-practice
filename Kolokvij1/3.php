<!--HTML DOCUMENT-->
<!DOCTYPE html>
<html>

<head></head>

<body>
    <form method="get" action="vjezba.php">
        Unesite dva broja: <br />
        a: <input type="text" name="br1" /><br />
        b: <input type="text" name="br2" /><br>
        <input type="submit" name="submit" value="Pošalji" />
    </form>
</body>

</html>


<!--SCRIPT DOCUMENT-->
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['br1']) && isset($_GET['br2'])) {
        $prviBroj = $_GET['br1'];
        $drugiBroj = $_GET['br2'];
    }
    function provjeraDjeljivosti($prvi, $drugi)
    {
        if ($prvi < $drugi) {
            echo "Prvi broj treba biti veći od drugog";
        } elseif ($prvi % $drugi) {
            echo "{$prvi} nije djeljivo sa {$drugi}";
        } else {
            echo "{$prvi} je djeljiv sa {$drugi}";
        }
    }
    provjeraDjeljivosti($prviBroj, $drugiBroj);
}
?>