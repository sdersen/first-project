<?php require __DIR__ . '/data.php'; 
require __DIR__ . '/functions.php';
 
//Variabels for game
$answerArtist0 = isArtist0($charactersOrArtists);
$answerCharacter0 = isCharacter0($charactersOrArtists);
$answerArtist1 = isArtist1($charactersOrArtists);
$answerCharacter1 = isCharacter1($charactersOrArtists);
$answerArtist2 = isArtist2($charactersOrArtists);
$answerCharacter2 = isCharacter2($charactersOrArtists);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="https://cdn-icons.flaticon.com/png/512/1539/premium/1539194.png?token=exp=1634284493~hmac=52410dcbe7ecf411879a3f20cbdb5a5a" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bitter:wght@200;400;500;600&display=swap" rel="stylesheet">
    <script>
        function getRandomCharacter() {
            document.getElementById("character").innerHTML = "<?= $costumeCharacter ?> <br> <?= $message ?>";
        }
        function checkCharacter0() {
            document.getElementById("ArtistCharacter0").innerHTML = "<?= $answerCharacter0?>";
        }
        function checkArtist0() {
            document.getElementById("ArtistCharacter0").innerHTML = "<?= $answerArtist0?>";
        }
        function checkCharacter1() {
            document.getElementById("ArtistCharacter1").innerHTML = "<?= $answerCharacter1?>";
        }
        function checkArtist1() {
            document.getElementById("ArtistCharacter1").innerHTML = "<?= $answerArtist1?>";
        }
        function checkCharacter2() {
            document.getElementById("ArtistCharacter2").innerHTML = "<?= $answerCharacter2?>";
        }
        function checkArtist2() {
            document.getElementById("ArtistCharacter2").innerHTML = "<?= $answerArtist2?>";
        }
    </script>
    <title>The Starry Wars</title>
</head>

<body>
    <nav>
        <?php
        foreach ($menu as $items) :
            foreach ($items as $key => $value) : ?>
                <a class="navLink" href="<?= $value; ?>"><?= $key; ?></a>
        <?php endforeach;
        endforeach;
        ?>
    </nav>

    <a href="/index.php"></a>