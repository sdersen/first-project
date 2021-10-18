<?php

declare(strict_types=1);

function getMovie(array $movies, int $id): array
{

    foreach ($movies as $movie) {
        if ($movie['id'] === $id) {
            return $movie;
        };
    };
};

// Functions for the game

function isArtist0($charactersOrArtists)
{
    if ($charactersOrArtists[0]['type'] === 'artist') {
        return 'yay';
    } else {
        return 'No but it should be rigth?';
    };
};

function isCharacter0($charactersOrArtists)
{
    if ($charactersOrArtists[0]['type'] === 'character') {
        return 'Yes, a Vulptereen male hitman from the planet Vulpter ';
    };
};

function isArtist1($charactersOrArtists)
{

    if ($charactersOrArtists[1]['type'] === 'artist') {
        return 'Yes correct, American rapper from Watts, California!';
    };
};

function isCharacter1($charactersOrArtists)
{
    if ($charactersOrArtists[1]['type'] === 'character') {
        return 'Yes';
    } else {
        return 'Nope';
    };
};
function isArtist2($charactersOrArtists)
{

    if ($charactersOrArtists[2]['type'] === 'artist') {
        return 'Yes.';
    } else {
        return 'No but it should be rigth?';
    };
};

function isCharacter2($charactersOrArtists)
{
    if ($charactersOrArtists[2]['type'] === 'character') {
        return 'Yes, he was a talented but reckless Abendedo pilot';
    };
};


// Skiss på funktion för random

// function getRandomCharacter(array $characters) : string {

//     $character = $characters[array_rand($characters)];

//     $message = $character['message'];
//     $costumeCharacter = $character['name'];

//     return $character['name'];
// };