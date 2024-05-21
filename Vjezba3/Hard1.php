<?php
$dbc = mysqli_connect('localhost', 'root', '', 'vjezba_3') or die('Error connecting' . mysqli_connect_error());
$query = "SELECT * FROM korisnik";
$result = mysqli_query($dbc, $query);

if ($result) {
    echo "<table border='1' style='border-collapse: collapse;'><tr>";
    $row = $result->fetch_assoc();
    foreach ($row as $column => $value) {
        echo "<th>$column</th>";
    }
    echo "</tr>";
    $result->data_seek(0);
    while ($row = $result->fetch_assoc()) {
        $color = $row['spol'] == 'Ž' ? 'red' : ($row['spol'] == 'M' ? '#0096FF' : 'white');
        echo "<tr style='background-color: $color;'>";
        foreach ($row as $value) {
            echo "<td style='padding: 5px 10px;'>$value</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Error";
}
