<!DOCTYPE html>
<html>
<head>
    <title>Latihan 4 - Continue</title>
</head>
<body>

<h2>Latihan 4 - Penggunaan Continue</h2>

<?php

for ($i = 1; $i < 11; $i++) {

    if ($i % 2 == 0) {
        continue;
    } else {
        echo $i . "<br>";
    }

}

?>

</body>
</html>