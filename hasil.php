<?php require 'proses.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Iterasi</title>
</head>

<body>
    <?php foreach ($data as $key => $item) : ?>
        Perulangan ke-<?= $key + 1 ?> : <strong><?= $item ?></strong> <br>
    <?php endforeach; ?>
</body>
</html>