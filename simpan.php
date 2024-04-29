<?php

include "connection.php";

$id = $_POST["id"];
$nama = $_POST["nama"];
$usia = $_POST["usia"];
$alamat = $_POST["alamat"];


$query = mysqli_query($conn, "UPDATE tbl_biodata SET nama='$nama', usia='$usia', alamat='$alamat' WHERE id='$id'");

if ($query) {
    echo "Berhasil update data $nama";
} else {
    echo "Kegagalan meng update data";
}
