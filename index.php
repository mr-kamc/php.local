<?php

require __DIR__ . '/autoload.php';

/*
$users = \App\Models\User::findAll();
var_dump($users);
*/

$news = \App\Models\News::findLast(1);
var_dump($news);