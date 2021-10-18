<?php

declare(strict_types=1);

function getMovie(array $movies, int $id) : array
{
    
        foreach ($movies as $movie) {
            if ($movie['id'] === $id) {
                return $movie;
            };
        };
    
}

function isArtist0($charactersOrArtists){

if ($charactersOrArtists[0]['type'] === 'artist') {
    return 'yay';
}else {
    return 'nay';
};
};

function isCharacter0($charactersOrArtists)
{
    if ($charactersOrArtists[0]['type'] === 'character') {
        return 'yay';
    }else {
        return 'nay';
    };
};

function isArtist1($charactersOrArtists){

    if ($charactersOrArtists[1]['type'] === 'artist') {
        return 'yay';
    }else {
        return 'nay';
    };
    };

function isCharacter1($charactersOrArtists)
{
    if ($charactersOrArtists[1]['type'] === 'character') {
        return 'yay';
    }else {
        return 'nay';
    };
};
function isArtist2($charactersOrArtists){

    if ($charactersOrArtists[2]['type'] === 'artist') {
        return 'yay';
    }else {
        return 'nay';
    };
    };

function isCharacter2($charactersOrArtists)
{
    if ($charactersOrArtists[2]['type'] === 'character') {
        return 'yay';
    }else {
        return 'nay';
    };
};




// function getRandomCharacter(array $characters) : string {

//     $character = $characters[array_rand($characters)];

//     $message = $character['message'];
//     $costumeCharacter = $character['name'];

//     return $character['name'];
// };