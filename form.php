<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>Form Add</title>
</head>

<body>
    <div style="text-align: center;">
        <h1>Menambah</h1>
    </div>
    <form action="./proses.php" method="POST">
        <div style="display: flex; justify-content: center; margin-top: 2.5rem;">
            <table width="50%" border style="border-collapse: collapse;">
                <tbody>
                    <tr>
                        <td>Nama</td>
                        <td style="border: 1px solid black;">
                            <input class="input" type="text" name="nama" size="12">
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>
                            <textarea name="alamat" style="width: 90%;"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>Usia</td>
                        <td>
                            <input class="input" type="number" name="usia">
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: .5rem;">
                            <button type="submit" class="btn" name="btn-submit">Kirim</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </form>
</body>

</html>