<?php


include 'configs/config.php';
$wordsArray = file(FILE_PATH);
var_dump($wordsArray);


include 'controllers/controller.php';
include 'views/layout.html';
