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
        <!-- Detta är inte löst du behöver hämta key ur array menu -->
        <a href="<?= $menu[0]['Menu'];?>"><?= $menu[0][$key];?></a>
        <a href="">About</a>
        <a href="">Contact</a>
    </nav>

