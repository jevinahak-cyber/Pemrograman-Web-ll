<!DOCTYPE html>
<html>
<head>
    <title>Latihan 5 - Foreach</title>
</head>
<body>

<h2>Latihan 5 - Penggunaan Foreach</h2>

<?php

$arr = array(
    "senin",
    "selasa",
    "rabu"
);

foreach ($arr as $hari) {
    echo "Hari: " . $hari . "<br>";
}

?>

</body>
</html>