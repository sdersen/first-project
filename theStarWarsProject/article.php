<?php
require __DIR__ . '/header.php';
require __DIR__ . '/data.php';

$id = $_GET['id'];?>

<main>
    <?php $movie = getMovie($movies, $id);?>

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