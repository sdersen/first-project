<?php require __DIR__ . '/header.php'; ?>
<main>
    <h1>Star Wars</h1>
    <h2>Game</h2>
    <p class="gameText">What dose Star Wars and rap artists have in common? Weird names! Can you guess if the names bellow is a character in Star Wars or a rap artist? </p>
    <div class="gameContainer">

        <article class="question">
            <p class="questionText"><?= $charactersOrArtists[0]['name']; ?></p>
            <button class="ArtistButton" onclick="checkArtist0()">Artist</button>
            <button class="ArtistButton" onclick="checkCharacter0()">Character</button>
        </article>
        <p id="ArtistCharacter0"></p>
        <article class="question">
            <p class="questionText"><?= $charactersOrArtists[1]['name']; ?></p>
            <button class="ArtistButton" onclick="checkArtist1()">Artist</button>
            <button class="ArtistButton" onclick="checkCharacter1()">Character</button>
        </article>
        <p id="ArtistCharacter1"></p>

        <article class="question">
            <p class="questionText"><?= $charactersOrArtists[2]['name']; ?></p>
            <button class="ArtistButton" onclick="checkArtist2()">Artist</button>
            <button class="ArtistButton" onclick="checkCharacter2()">Character</button>
        </article>
        <p id="ArtistCharacter2"></p>

    </div>
    <h2>Movie Info</h2>
    <div class="container">

        <?php
        foreach ($movies as $movie) : ?>
            <a href="/article.php?id=<?= $movie['id'] ?>">
                <article class="article">
                    <img class="cardImage" src=<?= $movie['image']; ?> alt="<?= $movie['title']; ?>" />
                    <h3><?= $movie['titel']; ?> ( <?= $movie['year']; ?> )</h3>
                    <p><?= $movie['descriptionShort']; ?></p>
                </article>
            </a>
        <?php endforeach; ?>
    </div>
</main>

<?php require __DIR__ . '/footer.php'; ?>