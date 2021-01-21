<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//if the table name is users, Model name must be Users, to get automatic connectivity

class User extends Model{
    use HasFactory;
    public $timestamps = false;
    //public $table = 'employee';  //but we can change also to use like, table name employee and model name also employee

}



