<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/table.css">
    <title>Table Page</title>
</head>

<body>
    <?php
    include "connection.php";
    include "function.php";
    $query = mysqli_query($conn, "SELECT * FROM tbl_biodata");
    $totalData = mysqli_num_rows($query);
    ?>
</body>
<center>
    <h1>Total data adalah: <?= $totalData ?></h1>
    <table width="70%">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Usia</th>
            <th>Alamat</th>
            <th>Action</th>
        </tr>
        <?php
        $count = 0;
        while ($row = mysqli_fetch_array($query)) : ?>
            <tr>
                <td> <?= $count += 1 ?></td>
                <td><?= $row["nama"] ?></td>
                <td><?= $row["usia"] ?></td>
                <td><?= $row["alamat"] ?></td>
                <td class="text-center">
                    <a href="./update.php?id=<?= $row["id"] ?>">Update</a>
                    <a href="./delete.php?id=<?= $row["id"] ?>" onclick="return confirm('Apakah anda yakin?')">Delete</a>
                </td>
            </tr>
        <?php endwhile ?>
    </table>
    <div>
        <h2>Apakah anda ingin menambahkan data?</h2>
        <div><a href="./form.php">Ya</a> atau <a href="">Tidak</a></div>
    </div>
</center>
</html>