<?php

require __DIR__ . '/autoload.php';

/*
$users = \App\Models\User::findAll();
var_dump($users);
*/

$news = \App\Models\News::findLast(3);

include __DIR__ . '/App/templates/header.php';
include __DIR__ . '/App/templates/body.php';
include __DIR__ . '/App/templates/footer.php';
