<!DOCTYPE html>
<html>

<head>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
    <?php
    $firstName = "Jill";
    $lastName = "Smith";
    $age = 50;
    ?>
</head>

<body>
    <table style="width:100%">
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Age</th>
        </tr>
        <tr>
            <?php
            echo "<td colspan='2'>{$firstName} {$lastName}</td>";
            echo "<td>{$age}</td>";
            ?>
        </tr>
    </table>
</body>

</html>