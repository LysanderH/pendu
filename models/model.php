<?php
function getWordsArray()
{
    return file(FILE_PATH);
}

function getRandomIndex($wordsArray)
{
    return rand(0, count($wordsArray) - 1);
}

function getWord($index, $wordArray)
{
    return $wordArray[$index];
}