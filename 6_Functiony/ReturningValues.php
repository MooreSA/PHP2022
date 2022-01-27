<?php

// --------------------------------
// -- Returning Values
// --------------------------------


/*
Sometimes you don't want the information in the function to be printed out. You need it to return a value for use later.
Functions can only return a single value.
*/

function getAuthor()
{
    return "Charles Dickens";
}

function bookByAuthorYear($authorName, $year = 1910)
{
    echo "This will list all the books written by ". $authorName ." in the year". $year ."<br>";
    echo "This will list all the books written by {$authorName} in the year {$year}<br>"; // note alt formatting
}

$year = 1920;
$authorName = getAuthor();

bookByAuthorYear($authorName, $year);  // return value stored in the variable


function Chinese_zodiac($year) {
    switch (($year - 4) % 12) {
        case  0: return 'Rat';
        case  1: return 'Ox';
        case  2: return 'Tiger';
        case  3: return 'Rabbit';
        case  4: return 'Dragon';
        case  5: return 'Snake';
        case  6: return 'Horse';
        case  7: return 'Goat';
        case  8: return 'Monkey';
        case  9: return 'Rooster';
        case 10: return 'Dog';
        case 11: return 'Pig';
    }
}
  
  $zodiac = Chinese_zodiac(2022);
  echo "2022 is the year of the {$zodiac}.<br>";

  echo "2027 is the year of the " . Chinese_zodiac(2027) . ".<br>";
