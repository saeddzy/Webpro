<?php

include "dbconfig.php";

$nim = $_POST["nim"];
$nama_depan = $_POST["nama_depan"];
$kode_prodi = $_POST["kode_prodi"];
$jk = $_POST["jenis_kelamin"];

$sqlStatement = "UPDATE students SET nama_depan='$nama_depan', kodeprodi='$kode_prodi',enis_kelamin='$jk' WHERE nim='$nim'";
$query = mysqli_query($conn, $sqlStatement);

mysqli_close($conn);
?>