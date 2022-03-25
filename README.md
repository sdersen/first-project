<img src="https://media0.giphy.com/media/P1trdeqfQODW8/giphy.gif?cid=ecf05e47d80q9vfxffyrg3cgftdjwd1e2yyoo0flg7ni6uc5&rid=giphy.gif&ct=g" width="100%">


# My Starry Wars

First ever PHP-project. A page about some Star Wars films. It also includes a game and a function that will give you info on who you can dress up as on your next Star Wars costume party. You can view the page at [sofiadersen.com/starrywars](http://sofiadersen.com/starrywars).

# Installation

Clone this repo and run a localhost.

# Code Review

Code review written by [Nelly Petrén](https://github.com/NellySP).

1. Cool with linked images! Just remember to add ‘alt’-text for accessibility.

2. As you play the game, things move around a bit as the answers pop up. Maybe this could be solved by adding some sort of width and height to the containers they’re in? (Game section in style.css, line 68-107.)

3. Good comments in the styles and functions-documents. It makes things easier on the eye and to understand. You could maybe put a few comments in the index-file as well as there is quite a bit of code in there with long lines. On the other hand you have clear and descriptive name on your divs/classes so it still works as is!

4. The sort-button on the index-page is a nice feature! It was just a bit tricky to see that it was clickable since the pointer och color didn’t changed as I hovered it. Maybe give it styling like the game-buttons, they were extremely clear! 

5. You’ve changed the folder name starrywars to theStarWarsProject, but in your data-file where you linked you haven’t changed that same name on lines 58-60. As a consequent it seems to not work great while on a localhost. Still works great on the website tho! 

# Bonus:
On inspect in chrome it shows an error 403 message for maybe a png. Couldn’t Find which one though. Maybe you already knew about this! Here’s what it looks like: “403 forbidden error. 1539194.png:1 GET https://cdn-icons.flaticon.com/png/512/1539/premium/1539194.png?token=exp=1634284493~hmac=52410dcbe7ecf411879a3f20cbdb5a5a 403”

# Testers

Tested by the following people:

1. Emma Hansson
2. Theo Sandell
3. Christopher Michael
