<?php
// Array of quotes
$quotes = [
    "Be yourself—everyone else is taken, and cloning is still illegal. - Oscar Wilde (probably)",
    "Two things are infinite: the universe and human error. At least one of them definitely works in tech. - Albert Einstein-ish",
    "In three words: life goes on. Even when Wi-Fi doesn’t. - Robert Frost with a modern twist",
    "The only way to do great work is to love what you do—or at least the coffee that comes with it. - Steve Jobs (and every intern ever)",
    "Life is what happens while you're debugging someone else’s code. - John Lennon, maybe a software developer at heart",
];

// Get a random index
$randomIndex = array_rand($quotes);

// Return the random quote
echo $quotes[$randomIndex];
?>
