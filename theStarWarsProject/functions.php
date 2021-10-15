<?php

declare(strict_types=1);

function getMovie(array $movies, int $id)
{
    
        foreach ($movies as $movie) {
            if ($movie['id'] === $id) {
                return $movie;
            };
        };
    
}

// function getRandomCharacter(array $characters) : string {

//     $character = $characters[array_rand($characters)];

//     $message = $character['message'];
//     $costumeCharacter = $character['name'];

//     return $character['name'];
// };