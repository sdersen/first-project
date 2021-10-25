<?php
require __DIR__ . '/header.php';
require __DIR__ . '/data.php';
?>

<div class="randomContainer">
    <h2>Who will you be at the next Star Wars costume party?</h2>
    <button class="characterButton" onclick="getRandomCharacter()">Find your character</button>
    <div>
        <h3>You will be....</h3>
    </div>
    <p id="character"></p>
</div>

<?php require __DIR__ . '/footer.php';?>