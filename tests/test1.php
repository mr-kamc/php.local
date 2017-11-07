<?php

require __DIR__ . '/../autoload.php';

$sql = 'SELECT * FROM user WHERE id > :id';

$data = [':id'=>1];//массив подстановок

$db = new \App\Db();

$res = $db->query($sql, \App\Models\User::class, $data);

var_dump($res);