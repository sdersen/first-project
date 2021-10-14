<?php require __DIR__ . '/header.php'; ?>
<main>
    <h1>Star Wars</h1>
    <div class="container">

        <?php
        foreach ($movies as $movie) { ?>
            <article class="article">
                <img class="cardImage" src=<?= $movie['image']; ?> alt="<?= $movie['title']; ?>" />
                <h3><?= $movie['titel']; ?></h3>
                <p><?= $movie['descriptionShort']; ?></p>
            </article>
        <?php } ?>

    </div>

    <div class="randomContainer">
        <h5>Wich Star Wars character are you?</h5>
        <button onclick="getRandomCharacter()">Find your character</button>
        <div>
            <h3>You are....</h3>
        </div>
        <p id="character"></p>
    </div>
</main>

<?php require __DIR__ . '/footer.php'; ?>