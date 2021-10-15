<?php

require __DIR__ . '/header.php';
require __DIR__ . '/data.php';
require __DIR__ . '/functions.php'; 

$id = $_GET['id'];?>

<main>
 <!-- När du kallar på funktionen skickar den åter rätt array, från den borde du kunna lyfta rätt variabler. -->
    <?php $movie = getMovie($movies, $id);
    
    ?>

    <article class="articlePage">
        <img class="articleImage" src="<?=$movie['image']?>" alt="">
        <div class="textContainer">
            <h2><?=$movie['titel']?></h2>
            <h4><?=$movie['descriptionShort']?></h4>
            <p><?=$movie['descriptionLong']?></p>
        </div>
    </article>

</main>

<?php require __DIR__ . '/footer.php'; ?>