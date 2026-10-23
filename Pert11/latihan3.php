
<?php
$conn = mysqli_connect(
    "localhost", "root", "", "lat_dbase"
);

if (!$conn) {
    die("Koneksi gagal");
}

$sql = "CREATE TABLE IF NOT EXISTS tbl_mhs (
    mhsID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    FirstName VARCHAR(15),
    LastName VARCHAR(15),
    Age INT
)";

if (mysqli_query($conn, $sql)) {
    echo "Tabel berhasil dibuat<br>";
}

$input = "INSERT INTO tbl_mhs
          (FirstName, LastName, Age)
          VALUES ('Jevi', 'Kerwinto', 23)";

if (mysqli_query($conn, $input)) {
    echo "Data Anjar berhasil ditambahkan";
} else {
    echo "Data gagal: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
