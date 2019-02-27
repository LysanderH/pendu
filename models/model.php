<?php
function getWordsArray()
{
    return file(FILE_PATH, FILE_IGNORE_NEW_LINES);
}

function getRandomIndex($wordsArray)
{
    return rand(0, count($wordsArray) - 1);
}

function getWord($index, $wordArray)
{
    return $wordArray[$index];
}
function getReplacementString($word, $count){
    return str_repeat(REPLACEMENT_CHAR, $count);

}