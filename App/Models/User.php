<?php


namespace App\Models;


use App\Db;
use App\Model;

class User extends Model
{
    const TABLE= 'user';
    public $id;
    public $name;
    public $email;


}