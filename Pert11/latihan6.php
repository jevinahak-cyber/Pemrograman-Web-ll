
<?php
$conn = mysqli_connect(
    "localhost", "root", "", "lat_dbase"
);

$sql = "SELECT * FROM tbl_mhs";
$hasil = mysqli_query($conn, $sql);

while ($data = mysqli_fetch_array($hasil)) {
    echo $data["FirstName"] . " ";
    echo $data["LastName"] . " ";
    echo $data["Age"] . "<br>";
}

mysqli_close($conn);
?>
