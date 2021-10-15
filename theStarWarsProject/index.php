<?php require __DIR__ . '/header.php'; ?>
<main>
    <h1>Star Wars</h1>
    <div class="container">

        <?php
        foreach ($movies as $movie) : ?>
            <article class="article">
                <img class="cardImage" src=<?= $movie['image']; ?> alt="<?= $movie['title']; ?>" />
                <h3><?= $movie['titel']; ?> ( <?= $movie['year']; ?> )</h3>
                <p><?= $movie['descriptionShort']; ?></p>
                <button class="readMoreButton">Read more</button>
            </article>
        <?php endforeach; ?>
    </div>
</main>

<?php require __DIR__ . '/footer.php'; ?>