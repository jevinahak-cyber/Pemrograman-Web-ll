
<?php
$conn = mysqli_connect(
    "localhost", "root", "", "lat_dbase"
);

$sql = "SELECT * FROM tbl_mhs";
$hasil = mysqli_query($conn, $sql);

while ($data = mysqli_fetch_row($hasil)) {
    echo "$data[1] $data[2] $data[3]<br>";
}

mysqli_close($conn);
?>
