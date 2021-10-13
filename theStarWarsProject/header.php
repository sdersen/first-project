<?php require __DIR__ . '/data.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <nav>
        <?php
        foreach ($menu as $items) :
            foreach ($items as $key => $value) : ?>
                <a href="<?= $value; ?>"><?= $key; ?></a>
        <?php endforeach;
        endforeach;
        ?>
    </nav>