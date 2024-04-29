<?php

$conn = mysqli_connect("localhost", "root", "", "db_biodata");

if ($conn->connect_error) {
    die($conn->connect_error);
}
