
<?php
$conn = mysqli_connect("localhost", "root", "");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

mysqli_query($conn, "CREATE DATABASE IF NOT EXISTS lat_dbase");
mysqli_select_db($conn, "lat_dbase");

$sql = "CREATE TABLE IF NOT EXISTS tbl_mhs (
    mhsID INT AUTO_INCREMENT PRIMARY KEY,
    FirstName VARCHAR(15),
    LastName VARCHAR(15),
    Age INT
)";

mysqli_query($conn, $sql);
?>
