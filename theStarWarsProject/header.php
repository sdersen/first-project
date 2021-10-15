<?php require __DIR__ . '/data.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="https://cdn-icons.flaticon.com/png/512/1539/premium/1539194.png?token=exp=1634284493~hmac=52410dcbe7ecf411879a3f20cbdb5a5a" type="image/x-icon">
    <script>
        function getRandomCharacter() {
            document.getElementById("character").innerHTML = "<?= $costumeCharacter ?> <br> <?= $message ?>";
        }
    </script>
    <title>My star Wars project</title>
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

    <a href="/index.php"></a>