<!DOCTYPE html>
<html>
<head>
    <title>Latihan 1 - While</title>
</head>
<body>

<h2>Latihan 1 - Perulangan While</h2>

<?php
$brush_price = 5;
$counter = 10;

echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr>";
echo "<th>Quantity</th>";
echo "<th>Price</th>";
echo "</tr>";

while ($counter <= 100) {
    echo "<tr>";
    echo "<td>" . $counter . "</td>";
    echo "<td>" . ($brush_price * $counter) . "</td>";
    echo "</tr>";

    $counter = $counter + 10;
}

echo "</table>";
?>

</body>
</html>