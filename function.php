<?php

function getData($conn, $query)
{
    $rows = [];
    $query = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($query)) {
        var_dump($row);
        $rows[] = $row;
    }
    return $rows;
}

function mutateData($conn, $query)
{
    $result = mysqli_query($conn, $query);
}


function setData($conn, $POST)
{
    //code...
    $nama = $POST["nama"];
    $usia = $POST["usia"];
    $alamat = $POST["alamat"];

    $query = "INSERT INTO tbl_biodat (nama, alamat, usia) VALUES (nama='$nama', alamat='$alamat', usia='$usia')";

    $returneble = mysqli_query($conn, $query);
    // var_dump([$returneble, "ini hasil kembalian"]);
    return $returneble;
}
