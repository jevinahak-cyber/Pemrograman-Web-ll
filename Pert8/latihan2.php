<!DOCTYPE html>
<html>
<head>
    <title>Contoh Penggunaan UDF</title>
</head>
<body>

<form method="post">
    Masukkan Bilangan Pertama:
    <br>
    <input type="text" name="A" size="10">
    <br><br>

    Masukkan Bilangan Kedua:
    <br>
    <input type="text" name="B" size="10">
    <br><br>

    <input type="submit" value="Hitung">
</form>

<?php

if (isset($_POST["A"]) && isset($_POST["B"])) {

    $A = $_POST["A"];
    $B = $_POST["B"];

    function jumlah($A, $B)
    {
        return $A + $B;
    }

    function kurang($A, $B)
    {
        return $A - $B;
    }

    function kali($A, $B)
    {
        return $A * $B;
    }

    function bagi($A, $B)
    {
        return $A / $B;
    }

    echo "<br>";
    echo "Bilangan Pertama : " . $A;
    echo "<br>";
    echo "Bilangan Kedua : " . $B;
    echo "<br><br>";

    $jumlahbil = jumlah($A, $B);
    echo "Hasil Penjumlahan 2 buah bilangan";
    echo "<br>";
    printf("Penjumlahan antara : %d + %d = %d", $A, $B, $jumlahbil);

    echo "<br><br>";

    $kurangbil = kurang($A, $B);
    echo "Hasil Pengurangan 2 buah bilangan";
    echo "<br>";
    printf("Pengurangan antara : %d - %d = %d", $A, $B, $kurangbil);

    echo "<br><br>";

    $kalibil = kali($A, $B);
    echo "Hasil Perkalian 2 buah bilangan";
    echo "<br>";
    printf("Perkalian antara : %d * %d = %d", $A, $B, $kalibil);

    echo "<br><br>";

    $bagibil = bagi($A, $B);
    echo "Hasil Pembagian 2 buah bilangan";
    echo "<br>";
    printf("Pembagian antara : %d / %d = %.2f", $A, $B, $bagibil);
}

?>

</body>
</html>
