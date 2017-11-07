<?php

require __DIR__ . '/autoload.php';

/*
$users = \App\Models\User::findAll();
var_dump($users);
*/

$users = \App\Models\User::findById(2);
var_dump($users);