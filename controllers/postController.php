<?php
$gameOver = false;
$gameWon = false;
$gamePlaying = true;
$lettersArray = unserialize(urldecode($_POST['lettersArray']));
$triedLetters = $_POST['triedLetters'];
$triedLetter = $_POST['triedLetter'];
$triedLetters .= $triedLetter;
$lettersArray[$triedLetter] = false;
$trials = $_POST['trials'];


$wordsArray = getWordsArray();
$wordIndex = $_POST['wordIndex'];
$word = strtolower(getWord($wordIndex, $wordsArray));
$lettersCount = $_POST['lettersCount'];
$letterFound = false;
$replacementString = $_POST['replacementString'];
for ($i = 0; $i < $lettersCount; $i++) {
    $letter = substr($word, $i, 1);
    if ($triedLetter === $letter) {
        $letterFound = true;
        $replacementString = substr_replace($replacementString, $triedLetter, $i, 1);
    }
}

if ($letterFound === false){
    $trials++;
}

$remainingTrials = MAX_TRIALS - $trials;

if ($remainingTrials <= 0){
    $gameOver = true;
    $gamePlaying = false;
} elseif ($replacementString === $word){
    $gameWon = true;
    $gamePlaying = false;
} else {
    $gamePlaying = true;
}