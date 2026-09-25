<!DOCTYPE html>
<html>
<head>
    <title>Latihan 2 - Do While</title>
</head>
<body>

<h2>Latihan 2 - Perulangan Do While</h2>

<?php
$i = 0;

echo "This code will run at least once because i default value is 0.<br><br>";

do {
    echo "i value is " . $i . ", so code block will run.<br>";
    $i++;
} while ($i < 10);
?>

</body>
</html>