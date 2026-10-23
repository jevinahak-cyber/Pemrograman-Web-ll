
<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect(
    $servername,
    $username,
    $password
);

if ($conn) {
    echo "OK.... koneksi berhasil";
} else {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
