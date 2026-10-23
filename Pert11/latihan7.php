
<?php
$conn = mysqli_connect(
    "localhost", "root", "", "lat_dbase"
);

$sql = "SELECT * FROM tbl_mhs";
$hasil = mysqli_query($conn, $sql);

$hit = mysqli_num_rows($hasil);

echo "Jumlah record: " . $hit;

mysqli_close($conn);
?>
