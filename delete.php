<?php
include "connection.php";
$id = $_GET["id"];
$query = mysqli_query($conn, "DELETE FROM tbl_biodata WHERE id='$id'");
if ($query) {
    // echo "Berhasil delete data";
    echo '<script>';
    echo "alert('Berhasil menghapus data')";
    echo '</script>';
} else {
    // echo "Kesalahan ketika menghapus uuututtutut";
    echo '<script>';
    echo 'alert("Kesalahan ketika menghapus uuututtutut")';
    echo '</script>';
}
header("Location: ./table.php");
die();
