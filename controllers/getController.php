<?php
if (isset($_COOKIE['pendu'])){

}
$gameOver = false;
$gameWon = false;
$gamePlaying = true;
$lettersArray = [
    'a' => true,
    'b' => true,
    'c' => true,
    'd' => true,
    'e' => true,
    'f' => true,
    'g' => true,
    'h' => true,
    'i' => true,
    'j' => true,
    'k' => true,
    'l' => true,
    'm' => true,
    'n' => true,
    'o' => true,
    'p' => true,
    'q' => true,
    'r' => true,
    's' => true,
    't' => true,
    'u' => true,
    'v' => true,
    'w' => true,
    'x' => true,
    'y' => true,
    'z' => true
];

$wordsArray        = getWordsArray();
$wordIndex         = getRandomIndex($wordsArray);
$word              = strtolower(getWord($wordIndex, $wordsArray));
$lettersCount      = strlen($word);
$replacementString = getReplacementString($word, $lettersCount);
$remainingTrials   = MAX_TRIALS;
$trials             = 0;
$triedLetters      = '';
