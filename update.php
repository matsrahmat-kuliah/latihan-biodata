<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <style>
        .input {
            width: 90%;
            padding-block: .5rem;
        }

        .btn {
            padding-block: .4rem;
            padding-inline: .6rem;
            background: #05a;
            color: #ffff;
        }

        .btn:hover {
            transform: scale(1.05);
        }
    </style>
</head>

<body>
    <?php
    include "connection.php";
    $id = $_GET["id"];
    $query = mysqli_query($conn, "SELECT * FROM tbl_biodata WHERE id=$id");
    ?>
    <div style="text-align: center;">
        <h1>Update</h1>
    </div>
    <form action="./simpan.php" method="POST">
        <div style="display: flex; justify-content: center; margin-top: 2.5rem;">
            <?php while ($row = mysqli_fetch_array($query)) : ?>
                <table width="50%" border style="border-collapse: collapse;">
                    <tbody>
                        <tr>
                            <td>Nama</td>
                            <td style="border: 1px solid black;">
                                <input class="input" type="text" name="nama" size="12" value="<?= $row["nama"] ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>
                                <textarea name="alamat" style="width: 90%;"><?= $row["alamat"] ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>Usia</td>
                            <td>
                                <input class="input" type="number" name="usia" value="<?= $row["usia"] ?>">
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: .5rem;">
                                <button type="submit" class="btn" name="btn-submit">Kirim</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            <?php endwhile ?>
        </div>
    </form>
</body>

</html>