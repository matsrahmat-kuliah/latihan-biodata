<?php
include "connection.php";
include "function.php";

$result = null;

function addData($conn)
{
    global $result;
    $nama = $_POST["nama"];
    $usia = $_POST["usia"];
    $alamat = $_POST["alamat"];

    $query = "INSERT INTO tbl_biodata (nama, usia, alamat) VALUES ('$nama', $usia, '$alamat');";
    $result = mysqli_query($conn, $query);
}

if (isset($_POST["btn-submit"])) {
    addData($conn);
}
$message = "";

if ($result) {
    $message = "Berhasil menambahkan data";
} else {
    $message = "Kesalahan saat menambahkan data";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function showNotif(type) {
            if (type == 'success') {
                alert("Berhasil menambahkan data");
            } else {
                alert("Terjadi kesalahan saat menambah data");
            }
        }
    </script>
</head>

<body>
    <div >
        <h1 style="text-align: center;"> <?= $message ?> </h1>
        <div style="display: flex; justify-content: center; align-items: center;"><a href="./table.php">Kembali ke table</a></div>
    </div>
</body>

</html>