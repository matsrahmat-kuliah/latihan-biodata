<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Failed</title>
</head>

<body>
    <?php $error = $_GET['error'] ?>
    <h1 style="text-align: center;">Failed &nbsp; <?= $error ?></h1>
    <div>
        <a href="../table.php">Back</a>
    </div>
</body>

</html>